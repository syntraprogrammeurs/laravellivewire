<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProfileForm extends Form
{
    //
    public User $user;
    #[Validate]
    public $name='';
    public $content='';

    public function rules(){
        return[
            'name'=>[
                'required',
                Rule::unique('users')->ignore($this->user),
            ]
        ];
    }
    public function setUser(User $user){
        $this->user = $user;
        $this->name =$this->user->name;
        $this->content =$this->user->content;
    }
    public function update(){
        $this->validate();
        $this->user->name = $this->name; $this->user->content = $this->content;
        $this->user->save();
    }
}
