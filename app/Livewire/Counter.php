<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment($step){
        $this->count = $this->count + $step;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
