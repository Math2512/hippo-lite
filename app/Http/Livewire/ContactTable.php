<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactTable extends Component
{
    use WithPagination;

    public $search = '';
    public $field ='name';
    public $sortDirection = 'asc';
    
    //protected $queryString = ['field', 'sortDirection'];

    public function sortBy($field)
    {
        $this->sortDirection = $this->field === $field
            ?   $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
            : 'asc';

        $this->field = $field;
    } 
    
    public function updatingSearch(): void
    {
        $this->gotoPage(1);
    }

    public function render()
    {
        $contacts = Contact::search('name', $this->search)->orderBy($this->field, $this->sortDirection)->paginate(5);
        return view('livewire.contact-table', compact('contacts'));
    }
}
