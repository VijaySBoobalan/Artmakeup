<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
class ImageUploadController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->Image = new Image;
    }

    public function index(){
        $show = $this->Image->paginate(32);
    	return view('imageupload.imageupload',compact('show'));
    }

    public function store(request $request){
        
        if ($files=$request->file('images')){
            foreach ($files as $file){
                $url = $this->upload_picture($file);
                $store = new Image;
                $store->category=request('category');
                if(!empty($url)){
                    $store->name = $url;
                }else{
                    $store->name = null;
                }
                $store->save();
                 
            }
            return back();
        }

    }

    public function upload_picture($picture){
        $file_name = time();
        $file_name= rand();
        $file_name = sha1($file_name);
        if ($picture){
            $ext = $picture->getClientOriginalExtension();
            $picture->move(public_path() . "/uploads", $file_name . "." . $ext);
            $local_url = '/uploads/'.$file_name . "." . $ext;
            return $local_url;
        }
        return "";
    }
    
    public function delete($id){
        $photo = $this->Image->find($id);
        unlink(public_path().($photo->name));
        $photo->delete();
        return back();
    }
              
        
}
