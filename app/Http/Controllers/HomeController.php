<?php

namespace App\Http\Controllers;

use App\Province;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::all();
        //dd($provinces);
        return view('home', ['provinces' => $provinces, 'style' => 'home']);
    }
    public function contact(){
        return view('contact', ['style' => 'contact']);
    }
    public function about(){
        return view('about', ['style' => 'about']);
    }
}
