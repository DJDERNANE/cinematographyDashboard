<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actor;
class actorsController extends Controller
{
    public function index(){
        $actors = Actor::all();
        return response()->json(["data"=>$actors]);
    }



    public function bestactors(){
        $actors=Actor::latest()->take(3)->get();
        return response()->json(["data"=>$actors]);
    }
}
