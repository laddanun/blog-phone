@extends('layout')
@section('content')
<div class="row" style="padding: 100px 0px;">
	<div class="col-md-4 col-md-offset-4">
		<center><h2>Edit File</h2></center><br>

		<div class="form-group">
			<form class="form-horizontal" action='{{route("upload.update")}}' method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<center>
					<img src="{{asset('images/'.$pic->name)}}" class="img-rounded" width="250" height="250" /><br>
					<label> File Name : {{$pic->name}}</label><br><br>
					<input type="File" name="image" value=""><br>

					<button type="submit" class="btn btn-info">บันทึก</button>
					<input type="hidden" class="form-control" name="id" value="{{$pic->id}}"> 
				</center>
			</form>

		</div>	
	</tbody>
</table>
</div>
</div>
</div>
@endsection