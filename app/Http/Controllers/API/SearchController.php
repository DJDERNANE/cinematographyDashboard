<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class SearchController extends Controller
{
    public function index(Request $request){
        $searchTerm = $request->input('query');
        $results = Film::where('title', 'like', '%' . $searchTerm . '%')->get();
        return response()->json(["data"=>$results]);
    }
}
