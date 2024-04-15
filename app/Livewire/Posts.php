<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    #[Title('posts')]
    public function delete(Post $post){
        $post->delete();
    }

    public function render()
    {
        return view('livewire.posts',[
            'posts'=>Post::all()
        ]);
    }
}
