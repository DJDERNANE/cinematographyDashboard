<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\ActorType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();
       return view('admin.actors',compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ActorType::all();
        if(count($types)>0){
            return view('admin.add_actor',compact('types'));
        }else{
            return redirect()->route('actorType.create')->with("message","add a category before");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('picture')) {
            $imageName = $request->file('picture')->getClientOriginalName();
            $image = $request->file('picture')->storeAs('./actors',$imageName,'images');
            Actor::create([
                "name"=>$request->title,
                "desc"=>$request->desc,
                "picture"=>$imageName,
                "TypeId" => $request->catid,
            ]);
            return redirect()->route('actor.index');
        }else{
            return 'invalid image try again';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        $types = ActorType::all();
        return view('admin.edit_actor', compact(['actor','types']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        $actor->name = $request->title;
        $actor->desc =  $request->desc;
        if ($request->hasFile('picture')) {
            $imagePath = './actors/'. $actor->picture;
            Storage::disk('images')->delete($imagePath);
            $imageName = $request->file('picture')->getClientOriginalName();
            $image = $request->file('picture')->storeAs('./actors',$imageName,'images');
            $actor->picture = $imageName;
        }
        $actor->save();
        return redirect()->route('actor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        $imagePath = './actors/'. $actor->picture;
        Storage::disk('images')->delete($imagePath);
        actor::destroy($actor->id);
        return redirect()->route('actor.index');
    }
}
