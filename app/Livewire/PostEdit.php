<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Post;

class PostEdit extends Component
{
    public $title, $body, $postId;

    public function render()
    {
        return view('livewire.post-edit');
    }

    #[On("editPost")]
    public function editPosts($id)
    {
        $post = Post::find($id);
        $this->postId = $id;
        $this->title = $post->title;
        $this->body = $post->body;

        Flux::modal("post-edit")->show();
    }

    public function update()
    {
        $this->validate([
            'title' => [
                'required',
                'string',
                'min:5',
                'max:32',
            ],
            'body' => [
                'required',
                'string',
                'min:20',
                'max:64'
            ],
        ]);

        $post = Post::find($this->postId);
        $post->title = $this->title;
        $post->body = $this->body;

        $post->save();

        Flux::modal("post-edit")->close();

        $this->dispatch("reloadPosts");
    }
}
