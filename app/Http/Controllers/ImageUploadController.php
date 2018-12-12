<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class ImageUploadController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$show=Upload::all();
        $show=Upload::paginate(32);
    	return view('imageupload.image',compact('show'));
    }

    public function store(request $request){
        if ($files=$request->file('images')){
            foreach ($files as $file){
                $url = $this->upload_picture($file);
                $file = new Upload;
                if(!empty($url)){
                    $file->name = $url;
                }else{
                    $file->name = null;
                }
                $file->save();
            }
            return back();
        }
    }

    public function upload_picture($picture){
        $file_name = time();
        $file_name.= rand();
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
            $photo = Upload::find($id);
            unlink(public_path().($photo->name));
            $photo->delete();
            return back();
    }
              
        
}
