<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ArtmakeupController extends Controller
{
    public function index()
    {
    	$image = Image::where('category','brindal')->orderBy('id', 'DESC')->get();
    	return view('makeup.portfolio',compact('image'));
    }
}
