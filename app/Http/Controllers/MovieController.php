<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index(){

        //recuperare i dati dal db e passarli alla view
        $movies = Movie::all();

        return view('home', compact('movies'));

    }
}
