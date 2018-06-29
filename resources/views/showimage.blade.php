@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="col-md-10">
			<h1>:: Picture ::</h1> 
		</div>
		<div class="col-md-2">
			<a class="btn btn-warning" href="{{route('upload')}}" role="button"><h4>เพิ่มรูปภาพ</h4></a> 
		</div>
		
		<table class="table table-hover">
			<tbody>
				<tr class="danger">
					<td>#</td>
					<td>File Name</td>
					<td>File Size</td>
					<td>Picture</td>
					<td>Action</td>
				</tr>
				@forelse ($pic as $file)
				<tr>
					<td>{{$file->id}}</td>
					<td>{{$file->name}}</td>
					<td>{{$file->size}}</td>
					<td><img src="{{asset('images/'.$file->name)}}" class="img-rounded" width="50" height="50" /></td>
					<td>
						<a class="btn btn-info" href="{{url('/editimage/'.$file->id)}}" role="button" style="width: 60px;">แก้ไข</a>
						<form action="{{route('upload.delete',$file->id)}}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-primary" type="submit" style="width: 60px;">ลบ</button>
						</form>
					</td>
				</tr>
				@empty
				<p>No Data</p>
				@endforelse	
			</tbody>
		</table>
	</div>
</div>

@endsection