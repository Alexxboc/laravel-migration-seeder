<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\travel;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
