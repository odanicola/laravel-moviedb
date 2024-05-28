<?php

namespace App\Livewire\Content;

use Livewire\Component;

class Moviepopular extends Component
{
    public $movies;

    public function mount($movies) {
        $this->movies = $movies;
    }

    public function render()
    {
        return view('livewire.content.moviepopular');
    }
}