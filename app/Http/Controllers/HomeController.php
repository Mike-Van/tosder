<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use Illuminate\Support\Facades\DB;

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
        return view('home', ['provinces' => $provinces]);
    }
}
