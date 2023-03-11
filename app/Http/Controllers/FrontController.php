<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Cards;
use App\Models\Files;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public  function frontPage(){
        $abouts = About::first();
        $files = Files::all();
        $cards = Cards::all();

        return view('mainpages.index', compact('abouts','files','cards'));
    }
}
