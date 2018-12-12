
@include('layouts.app');
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
	</head>
	<body>
		<br>
		<form action="{{route('upload')}}" method="POST" enctype="multipart/form-data" >
			{{csrf_field()}}
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-sm-offset-3">
						<h1><center>Image Upload</center></h1>
						<div class="form-group">
							<input type="file" name="images[]" multiple>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" name="submit">
						</div>
					</div>
				</div>
		</form>
		<table class="table table-striped table-hover ">
			<h1>Uploaded Images<h1>
			<thead>
				<tr>
					<th>Id</th>
					<th>Image Name</th>
					<!-- <th>Image Name</th> -->
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($show as $detail)
				<tr>
					<td>{{$detail->id}}</td>
					<td><img width="20%" style="border-radius:30%" src=" {{$detail->name}}"></td>
					<!-- <td>{{$detail->name}}</td> -->
					<td><button type="button" class="btn btn-primary">Edit</button></td>
					<form action="{{ route('delete',$detail->id)}}" method="POST">
				      {{ csrf_field() }}
				     <input type="hidden" name="_method" value="DELETE">
				      <td><button onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button></td>
				  </form>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</body>
</html>