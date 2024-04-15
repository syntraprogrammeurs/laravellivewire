<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditProfile extends Component
{
    public User $user;
    public $name='';
    public $content='';
    public $showSuccess = false;
    public function mount(){
        //$this->user = User::whereId(1)->first();
        $this->user = User::where('id',1)->first();
        $this->name =$this->user->name;
        $this->content =$this->user->content;
    }

    public function save(){
        $this->user->name = $this->name; $this->user->content = $this->content;
        $this->user->save();
        $this->showSuccess=true;
    }
    public function render()
    {
        return view('livewire.edit-profile');
    }
}
