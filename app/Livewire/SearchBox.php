<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SearchBox extends Component
{


    public $search = '';

    public function updated()
    {


        $this->dispatch('search', search: $this->search);
    }


    public function render()
    {
        return view('livewire.search-box');
    }
}
