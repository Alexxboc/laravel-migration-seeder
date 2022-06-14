<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Travel;

class PageController extends Controller
{
    public function index()
    {   
        $travel = Travel::all();
        //dd($travel);
        return view('welcome', compact('travel'));
    }
}
