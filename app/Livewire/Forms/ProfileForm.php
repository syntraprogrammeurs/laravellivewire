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
    public $emails = false;
    public $newsletter = false;
    public $marketing = false;
    public $country = '';

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
        $this->emails= $this->user->emails;
        $this->newsletter= $this->user->newsletter;
        $this->marketing= $this->user->marketing;
        $this->country= $this->user->country;
    }
    public function update(){
        $this->validate();
        $this->user->name = $this->name; $this->user->content = $this->content;
        $this->user->emails = $this->emails;
        $this->user->newsletter = $this->newsletter;
        $this->user->marketing = $this->marketing;
        $this->user->country = $this->country;
        $this->user->save();
    }
}
