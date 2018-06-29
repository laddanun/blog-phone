@extends('layouts.app')
@section('content')

	<div class="row" style="padding: 150px 0px;">
		<div class="col-md-4 col-md-offset-4">
			
			<center><h1>Upload File</h1></center>
			<form action="{{route('data.create')}}" enctype="multipart/form-data" method="post">
				{{csrf_field()}}
				<input type="File" name="image"><br>
				<input type="submit" name="" value="Upload">
			</form>

		</div>
	</div>

@endsection