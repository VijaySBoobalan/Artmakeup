<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;


class ArtmakeupController extends Controller
{
    public function portfolio(){
    	$Bridals=Image::where('category','bridal')->orderBy('id','DESC')->limit(6)->get();
    	$Fashion=Image::where('category','fashion')->orderBy('id','DESC')->limit(6)->get();
    	return view('makeup.portfolio',compact('Bridals','Fashion'));
    }

    public function bridal(){
    	$Bridals=Image::where('category','bridal')->orderBy('id','DESC')->paginate(6);
    	return view('makeup.bridal',compact('Bridals'));
    }

     public function Fashion(){
    	$Fashion=Image::where('category','Fashion')->orderBy('id','DESC')->paginate(6);
    	return view('makeup.fashion',compact('Fashion'));
    }
}
