<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::latest()->paginate(10);
        return view('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
                'name' => 'required',
                'email' => 'required',
        ]);

        $data = $request->all();
        Actor::create($data);

        return redirect()->route('actors.index')
                ->with('success', 'Actor created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actor $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        //$actor = Actor::find($actor->id);

        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actor $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        //$actor = Actor::find($actor->id);

        return view('actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Actor $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        request()->validate([
                'name' => 'required',
                'email' => 'required',
        ]);

        $data = $request->all();
        $actor->update($data);

        return redirect()->route('actors.index')
                ->with('success', 'Actor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actor $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        Actor::destroy($actor);
        return redirect()->route('actors.index')
                ->with('success', 'Actor deleted successfully');
    }
}
