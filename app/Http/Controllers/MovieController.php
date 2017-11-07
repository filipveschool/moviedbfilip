<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    function __construct()
    {

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::where('tmdb_id', 120)->first();
        //$date = new Date($movie->release_date);
        $date = $movie->release_date;
        return view('welcome', compact('movie', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = request()->all();
        //dd(request()->get('name'));
        $name = request()->get('title');
        Movie::create($input);
        /*
        Movie::create(
                [
                        'title' => $name
                ]
        );
        */
        //dd($input);

        //return response()->json(['success' => 'Got Simple Ajax Request.']);
        return response()->json(['success' => $name]);

        //$data = $request->all();

        //dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {


        return view('movies.show');
    }

    public function showmovie()
    {
        $movie = Movie::where('tmdb_id', 120)->first();
        $background = 'https://image.tmdb.org/t/p/original/' . $movie->background;
        $poster = 'https://image.tmdb.org/t/p/original/' . $movie->poster;

        return view('movies.show', compact('movie', 'background', 'poster'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }


    // Custom views

    /**
     * View to show all top rated movies from 10-0 score from tmdb.com
     */
    public function getTopRatedMoviesOverview()
    {
        return view('movies.topRatedOverview');
    }

}
