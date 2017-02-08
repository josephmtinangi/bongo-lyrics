<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Genre;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class SongController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lyrics = Song::with('artist')->get();
        return view('lyrics.index', compact('lyrics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        $genres = Genre::all();
        return view('lyrics.create', compact('artists', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:songs|max:255',
            'artist' => 'required',
            'genre' => 'required',
            'lyrics' => 'required',
        ]);

        Song::create([
            'title' => $request->input('title'),
            'artist_id' => $request->input('artist'),
            'youtube_url' => $request->input('youtube_url'),
            'lyrics' => $request->input('lyrics'),
            'genre_id' => $request->input('genre'),
            'user_id' => Auth::user()->id,
        ]);

        flash('Lyric added.');

        return redirect('lyrics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lyric = Song::with(['artist', 'user'])->findOrFail($id);
        return view('lyrics.show', compact('lyric'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artists = Artist::all();
        $genres = Genre::all();
        $lyric = Song::findOrFail($id);
        return view('lyrics.edit', compact('lyric', 'artists', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lyric = Song::findOrFail($id);

        $lyric->title = $request->input('title');
        $lyric->artist_id = $request->input('artist');
        $lyric->youtube_url = $request->input('youtube_url');
        $lyric->lyrics = $request->input('lyrics');
        $lyric->genre_id = $request->input('genre');
        $lyric->user_id = Auth::user()->id;

        $lyric->save();

        flash('Lyric updated.');

        return redirect('lyrics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lyric = Song::findOrFail($id);
        $lyric->delete();

        flash()->success('Lyric deleted.');

        return redirect('lyrics');
    }

    public function addLyric(Request $request, $id)
    {
        $comment = new Comment;
        $comment->body = $request->input('body');
        $comment->user_id = Auth()->user()->id;
        $comment->song_id = $id;
        $comment->save();

        return redirect()->back();
    }
}
