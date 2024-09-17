<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email'
    ];

    public function submit(){
        $this->validate();
        $mailData = [
            'subject' => 'You have recieved a contact mail',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];
        Mail::to('admin@example.com')->send(new ContactMail($mailData));
        session()->flash('success','Thaks for contact with us');
        $this->redirect('/contact');

    }
    public function updated($propertyName)
    {
        $this->resetErrorBag($propertyName);
        $this->resetValidation($propertyName);
    }
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
