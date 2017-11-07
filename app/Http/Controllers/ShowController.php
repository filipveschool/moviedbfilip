<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;
use Tmdb\Laravel\Facades\Tmdb;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Tmdb::getTvApi()->getTvshow(1434);
        $characters = Tmdb::getTvApi()->getCredits(1434);
        $external = Tmdb::getTvApi()->getExternalIds(1434);

        //$background = 'https://image.tmdb.org/t/p/original/' . $show->backdrop_path;
        //$poster = 'https://image.tmdb.org/t/p/original/' . $show->poster_path;

        $genres = $show['genres'];
        $createdby = $show['created_by'];
        $networks = $show['networks'];

        $arraymerged = array_merge($networks, $createdby);

        //dd($characters['cast']);

        //dd($arr);

        //dd($genres);

        foreach ($genres as $genre) {
            //dd($result['title']);
            //dd($genre);
        };

        //dd($show);

        return view('shows.show', compact('show', 'genres', 'arraymerged', 'characters', 'external'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Show $show
     * @return \Illuminate\Http\Response
     */
    public function show(Show $show)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Show $show
     * @return \Illuminate\Http\Response
     */
    public function edit(Show $show)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Show $show
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Show $show)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Show $show
     * @return \Illuminate\Http\Response
     */
    public function destroy(Show $show)
    {
        //
    }
}
