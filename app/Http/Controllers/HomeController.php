<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Genre;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lyrics = Song::whereUserId(Auth::user()->id)->get();
        $genres = Genre::whereUserId(Auth::user()->id)->get();
        $artists = Artist::all();
        return view('home', compact('lyrics', 'genres', 'artists'));
    }
}
