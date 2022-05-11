<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        //recuperare i dati dal db e passarli alla view
        return view('home');

    }
}
