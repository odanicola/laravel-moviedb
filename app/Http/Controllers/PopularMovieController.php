<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Moviedb;

class PopularMovieController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $moviedb = new Moviedb;
            $res = $moviedb->getPopularMovies(['language' => 'en-Us', 'page' => 1]);
            dd($res);
        }
        
        return view('livewire.movie.popular');
    }
}
