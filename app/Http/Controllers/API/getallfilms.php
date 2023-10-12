<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Category;

class getallfilms extends Controller
{
    public function index(){
        $films = Film::all();
        $cats = Category::all();
        return response()->json(["data"=>$films, "cats"=>$cats]);
    }



    public function bestfilms(){
        $films=Film::latest()->take(3)->get();
        return response()->json(["data"=>$films]);
    }

    public function getfilmbycat(Request $request){
        $category = $request->input('category');
        $films = Film::where('catId', $category)->get();
        return response()->json(["data"=>$films]);
    }
}
