
@include('imageupload.layout.header')
@include('imageupload.layout.sidebar')
@section('content')


@endsection
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
            <a><b>+</b>Add Images</a>
            <div class="search-container">
              <form action="#">
                <button type="submit">Upload</button>
               
                <input type="file" class="btn btn-info btn-sm" name="images[]" style="margin: 8px;">
              </form>
              
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
        
@include('imageupload.layout.footer')
