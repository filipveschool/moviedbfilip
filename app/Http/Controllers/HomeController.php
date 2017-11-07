<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
