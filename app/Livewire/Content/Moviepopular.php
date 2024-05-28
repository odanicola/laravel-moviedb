<?php

namespace App\Livewire\Content;

use Livewire\Component;

class Moviepopular extends Component
{
    public $movie;

    public function mount($movie) {
        $this->movie = $movie;
    }
}