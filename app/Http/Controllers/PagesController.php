<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homemodel;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    //
    public function home(){
        $main_sliders=DB::table('main_sliders')->get();
        $title = 'Home';
        return view('pages/home',["sliders"=>$main_sliders,"title"=>$title]);
        
    }
}
