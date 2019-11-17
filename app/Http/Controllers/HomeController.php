<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){

        return view('home.index');
    }

    function contact_create(){

        return view('home.contact');
    }
    function contact_store(Request $request){

        dd($request->all());
    }

    function about(){

        return view('home.about');
    }

    function event(){

        return view('home.events');
    }

    function formation(){

        return view('home.formations');
    }

    function coaching(){

        return view('home.coaching');
    }
    function shop(){

        return view('home.boutique');
    }

    function audio(){

        return view('home.audios');
    }
    function video(){

        return view('home.videos');
    }
    function book(){

        return view('home.books');
    }
}
