<?php

namespace App\Livewire;

use App\Mail\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactForm extends Component
{
    public $title, $email, $message;

    protected $rules = [
        'title' => 'required|string|min:2|max:64',
        'email' => 'required|email|max:64',
        'message' => 'required|string|min:10|max:256',
    ];

    public function update($propertyName){
        $this->validateOnly($propertyName);
    }

    public function send()
    {

        $validatedDate = $this->validate();

        try{
            Mail::to($this->email)->send(New Contact($validatedDate));

            session()->flash('success', 'Your message has been sent!');

        } catch (\Throwable $th){
            session()->flash('error', 'Falied to send message. Please try agin later!');
        }

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}