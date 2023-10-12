<?php

namespace App\Http\Controllers;

use App\Models\ActorType;
use Illuminate\Http\Request;

class ActorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ActorType::all();
        return view('admin.actor_type',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ActorType::create([
            "name"=>$request->name,
        ]);
        return redirect()->route('actorType.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActorType  $actorType
     * @return \Illuminate\Http\Response
     */
    public function show(ActorType $actorType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActorType  $actorType
     * @return \Illuminate\Http\Response
     */
    public function edit(ActorType $actorType)
    {
        return view('admin.edit_type', compact('actorType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActorType  $actorType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActorType $actorType)
    {
        $actorType->name=$request->name;
        $actorType->save();
        return redirect()->route('actorType.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActorType  $actorType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActorType $actorType)
    {
        ActorType::destroy($actorType->id);
        return redirect()->route('actorType.index');
    }
}
