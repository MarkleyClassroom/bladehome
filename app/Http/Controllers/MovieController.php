<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = array('Black Adam', 'Ticket to Paradise', 'The Bad Guys');
        return view('index', compact('movies'));
    }
}
