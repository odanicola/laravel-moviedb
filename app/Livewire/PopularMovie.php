<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Libraries\Moviedb;

#[Title('Popular Movie')]
class PopularMovie extends Component
{
    public $movies;
    public $page;
    
    public function mount() {
        $arr = [];
        for ($i=0; $i <13 ; $i++) { 
            # code...
            $arr[$i] = [
                'id' => $i+1,
                'name' => 'Product ' . $i+1,
                'price' => '$' . random_int(1,1000),
                'image' => 'https://via.placeholder.com/150'
            ];
        }

        $response = $this->getPopularMovies();
        $this->movies = $response ? $response['results'] : [];
        $this->page = $response ? $response['page'] : 1;
        // dd($this->movies);
        // $arr = json_decode(json_encode($arr));
        // $this->movies = (object) $arr;
    }

    private function getPopularMovies() {
        $moviedb = new Moviedb;
        $res = $moviedb->getPopularMovies(['language' => 'en-Us', 'page' => 1]);
        return $res;
    }

    public function render()
    {
        return view('livewire.popular-movie');
    }
}