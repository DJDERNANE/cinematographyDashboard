<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
       return view('admin.films',compact('films'));
       //$film = Category::find(1);
       //$category = $film->films;
       // return $category;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if(count($categories)>0){
            return view('admin.add_film',compact('categories'));
        }else{
            return redirect()->route('category.create')->with("message","add a category before");
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
            $image = $request->file('picture')->storeAs('./films',$imageName,'images');
            Film::create([
                "title"=>$request->title,
                "desc"=>$request->desc,
                "picture"=>$imageName,
                "catId" => $request->catid,
                "auther" => $request->auther,
                "senareo" => $request->senareo,
                "filmer" => $request->filmer,
                "product" => $request->product,
                "prod" => $request->prod,
                "date" => $request->date,
                "duree" => $request->duree,
                "size" => $request->size,
            ]);
            return redirect()->route('film.index');
        }else{
            return 'invalid image try again';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        $categories = Category::all();
        return view('admin.edit_film', compact(['film','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {

        $film->title = $request->title;
        $film->desc =  $request->desc;
        $film->auther = $request->auther;
        $film->senareo = $request->senareo;
        $film->filmer = $request->filmer;
        $film->product = $request->product;
        $film->prod = $request->prod;
        $film->date = $request->date;
        $film->duree = $request->duree;
        $film->size = $request->size;
        if ($request->hasFile('picture')) {
            $imagePath = './films/'. $film->picture;
            Storage::disk('images')->delete($imagePath);
            $imageName = $request->file('picture')->getClientOriginalName();
            $image = $request->file('picture')->storeAs('./films',$imageName,'images');
            $film->picture = $imageName;
        }
        $film->save();
        return redirect()->route('film.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $imagePath = './films/'. $film->picture;
        Storage::disk('images')->delete($imagePath);
        Film::destroy($film->id);
        return redirect()->route('film.index');
    }
}
