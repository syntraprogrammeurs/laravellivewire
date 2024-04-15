<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Component;

class Tasks extends Component
{
    #[Title('tasks')]
    public $task='';
    public $tasks=[];
    public function add(){
        $this->tasks[]= $this->task;
        $this->task='';
    }
    //lifecycle hooks
    public function mount(){
       $this->tasks=[
            'Task 1',
            'Task 2'
        ];
    }
    public function updated($property,$value){
        $this->$property = Str::upper($value);
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
