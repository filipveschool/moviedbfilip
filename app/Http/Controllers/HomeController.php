<?php

namespace App\Http\Controllers;

use Tmdb\Laravel\Facades\Tmdb;

class HomeController extends Controller
{

    private $movies;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct()
        //function __construct(MovieRepository $movies)
    {
        //$this->movies = $movies;
        // $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // returns information of a movie
        //$popular = Tmdb::getMoviesApi()->getMovie(120);
        $popular = Tmdb::getMoviesApi()->getPopular(["page" => 1]);

        $results = $popular['results'];
        foreach ($results as $result) {
            //dd($result['title']);
            dd($result);
            /**
             * array:14 [▼
             * "vote_count" => 3411
             * "id" => 346364
             * "video" => false
             * "vote_average" => 7.3
             * "title" => "It"
             * "popularity" => 783.997954
             * "poster_path" => "/9E2y5Q7WlCVNEhP5GiVTjhEhx1o.jpg"
             * "original_language" => "en"
             * "original_title" => "It"
             * "genre_ids" => array:3 [▶]
             * "backdrop_path" => "/tcheoA2nPATCm2vvXw2hVQoaEFD.jpg"
             * "adult" => false
             * "overview" => "In a small town in Maine, seven children known as The Losers Club come face to face with life problems, bullies and a monster that takes the shape of a clown ca ▶"
             * "release_date" => "2017-09-05"
             * ]
             */
        };

        //dd($results['0']['title']);
        //dd($popular['results']);


        return view('home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function ajaxRequest()
    {

        //return view('ajaxRequest');
        return view('movies.showSingleMovie');


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function ajaxRequestPost()
    {

        $input = request()->all();
        //dd(request()->get('name'));
        $name = request()->get('name');
        //dd($input);

        //return response()->json(['success' => 'Got Simple Ajax Request.']);
        return response()->json(['success' => $name]);

    }


}
