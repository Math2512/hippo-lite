<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use LivewireUI\Modal\ModalComponent;

class Modal extends ModalComponent
{
    public $contact;

    public function mount(Contact $contact){
        $this->contact = $contact;
    }
    
    public function render()
    {
        $contact = new Contact();
        return view('livewire.modal', compact('contact'));
    }
    
}
