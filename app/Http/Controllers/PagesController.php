<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $title = 'Home';
        return view('pages/home',compact('title'));
        
    }
}
