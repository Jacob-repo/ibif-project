<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Flux\Flux;

class PostCreate extends Component
{
    public $title, $body;

    public function render()
    {
        return view('livewire.post-create');
    }

    public function submit()
    {
        $this->validate([
            'title' => [
                'required',
                'string',
                'min:5',
                'max:64',
                'regex:/^[A-Za-z0-9\s\-\_\.]+$/'
            ],
            'body' => [
                'required',
                'string',
                'min:20',
                'max:256'
            ],
        ]);

        Post::create([
            "title" => $this->title,
            "body" => $this->body
        ]);

        $this->resetForm();

        Flux::modal("create-post")->close();

        $this->dispatch("reloadPosts");
    }

    public function resetForm(){
        $this->title = "";
        $this->body = "";
    }
}
