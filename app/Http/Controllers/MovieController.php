<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index()
    {
        return view('index', ["movies" => Movie::all()]);
    }
}
