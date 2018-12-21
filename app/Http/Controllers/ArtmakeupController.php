<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Image;

class ArtmakeupController extends Controller
{
    public function portfolio(){
    	$Bridals=Image::where('category','bridal')->orderBy('id','DESC')->limit(6)->get();
    	
    	$Fashion=Image::where('category','fashion')->orderBy('id','DESC')->limit(6)->get();
    	return view('makeup.portfolio',compact('Bridals','Fashion'));

    }
}
