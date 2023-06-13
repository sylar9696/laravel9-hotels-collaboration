<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;

class HomeController extends Controller
{
    public function getHome(){

        $hotels = Hotel::All();

        return view('pages.home', compact('hotels'));
    }
}
