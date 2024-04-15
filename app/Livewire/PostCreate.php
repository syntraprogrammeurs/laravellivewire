<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostCreate extends Component
{
    #[Rule('required', 'Add a title please')]
    public $title;
    public $content;
    public function save(){
        $this->validate([
            'title' => 'required',
            'content'=>'required',
        ]);

        Post::create([
         'title' => $this->title,
         'content'=>$this->content
        ]);
        $this->redirect('/posts');
    }
    public function render()
    {
        return view('livewire.post-create');
    }
}
