<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfileForm;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{
    public ProFileForm $form;
    public $showSuccess = false;
    public function mount(){
        //$this->user = User::whereId(1)->first();
       // $this->user = User::where('id',1)->first();
        $this->form->setUser(User::where('id',1)->first());
    }

    public function save(){
        $this->form->update();
        $this->showSuccess=true;
    }
    public function render()
    {
        return view('livewire.edit-profile');
    }
}
