<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Libraries\Moviedb;

#[Title('Popular Movie')]
class PopularMovie extends Component
{
    public $movies = [];
    public $page = 1;
    
    public function prev() {
        if ($this->page > 1) {
            $this->page--;
            $params = ['language' => 'en-Us', 'page' => $this->page];
            $this->loadMovies($params);
        }
    }

    public function next() {
        $this->page++;
        $params = ['language' => 'en-Us', 'page' => $this->page];
        $this->loadMovies($params);
    }

    public function mount() {
        $params = ['language' => 'en-Us', 'page' => $this->page];
        $this->loadMovies($params);
    }

    public function loadMovies($params) {
        $response = $this->getPopularMovies($params);
        $this->movies = $response ? $response['results'] : [];
        $this->page = $response ? $response['page'] : 1;
    }

    private function getPopularMovies($params) {
        $moviedb = new Moviedb;
        $res = $moviedb->getPopularMovies($params);
        return $res;
    }

    public function render()
    {
        return view('livewire.popular-movie');
    }
}