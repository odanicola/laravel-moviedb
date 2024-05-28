<?php
namespace App\Libraries;
use Illuminate\Support\Facades\Http;

class Moviedb {
    private $auth = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMGVlNTAxM2E0M2Q3YWUxZDYzNTdhMzNkZmFjZTQwZSIsInN1YiI6IjVlN2Y1NGQyYTI3NTAyMDAxNmVlYjE5OSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.5Kb5F98Qg06cWvN9zc5OY0S1pJTBsig6AJ0Ajk2v4Dc';
    private $baseURL = 'https://api.themoviedb.org/';
    private $version = '3';

    private function getHeaders() {
        return [
            'Authorization' => 'Bearer ' . $this->auth,
            'accept' => 'application/json'
        ];
    }

    private function getFullURL($subpath) {
        return $this->baseURL.$this->version.$subpath;
    }

    public function getMovieImages($movieId, $params = []) {
        $subpath = '/' . $movieId . '/images';
        $response = Http::withHeaders($this->getHeaders())
            ->get($this->getFullURL($subpath), $params);
        if ($response->ok()) {
            return $response->json();
        }

        return array();
    }

    public function getPopularMovies($params) {
        $subpath = '/movie/popular';
        $response = Http::withHeaders($this->getHeaders())
            ->get($this->getFullURL($subpath), $params);
        if ($response->ok()) {
            return $response->json();
        }

        return array();
    }

    public function getNowPlayingMovies($params) {
        $subpath = '/movie/now_playing';
        $response = Http::withHeaders($this->getHeaders())
            ->get($this->getFullURL($subpath), $params);
        if ($response->ok()) {
            return $response->json();
        }

        return array();
    }

    public function getTopRatedMovies($params) {
        $subpath = '/movie/top_rated';
        $response = Http::withHeaders($this->getHeaders())
            ->get($this->getFullURL($subpath), $params);
        if ($response->ok()) {
            return $response->json();
        }

        return array();
    }

    public function getUpcomingMovies($params) {
        $subpath = '/movie/upcoming';
        $response = Http::withHeaders($this->getHeaders())
            ->get($this->getFullURL($subpath), $params);
        if ($response->ok()) {
            return $response->json();
        }

        return array();
    }
}