<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class HomeController extends Controller
{
    public function Home(){
        $movie = Movie::all();
        return view('home',compact('movie'));
    }

    public function Details($id){
        $movie = Movie::where('id', $id)->get();
        
        return view('home',compact('movie'));
    }
}
