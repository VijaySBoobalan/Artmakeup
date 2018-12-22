@extends('imageupload.layout.master')
@section('content')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-gallery"></i> Gallery</h1>
      
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="">Gallery</a></li>
    </ul>
  </div>
  <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data" >
    {{csrf_field()}}
    <div class="title">
      <center>
      <div class="topnav">
       <div class="row">
        <div class="col-sm-4">
            <select  class="form-control" name="category" style="margin: 8px;">
              <option selected disabled>Select Category</option>
              <option value="bridal">Bridal</option>
              <option value="fashion">Fashion</option>
            </select>
       </div>
       
       <input type="file" class="btn btn-info btn-sm" name="images[]" style="margin: 8px;" multiple>
          <button type="submit" class="btn btn-primary" style="margin: 8px;">Upload</button>
       
      </div>
      </div>
      </div>
      </center>
      <br>
    </div>
  </form>
  <div class="row">
    @foreach($show as $detail)
    <div class="col-md-3">
      <div class="tile">
        <div class="embed-responsive ">
          <center><img class="img" src="{{$detail->name}}" alt="gallery"></center><br>
          <form action="{{ route('delete',$detail->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
    
    <br>
  </div>
  
    {{$show->OnEachSide(2)->Links()}}
 
   @endsection