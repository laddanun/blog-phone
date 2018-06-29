@extends('layout')
@section('content')

<form class="form-horizontal" action='{{route("page.update")}}' method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}

	<div class="row" style="padding: 150px 0px;">
		<div class="col-md-2 col-md-offset-5">
			<div class="form-group">
				<label for="exampleInputEmail1">ชื่อ</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="แก้ไขชื่อ" value="{{$customer->name}}">
				@if ($errors->has('name'))
				<span class="text-danger">
					{{ $errors->first('name') }}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">เบอร์โทรศัทพ์</label>
				<input type="text" class="form-control" id="tel"  name="tel" placeholder="แก้ไขเบอร์โทรศัทพ์" value="{{$customer->tel}}">
				@if ($errors->has('tel'))
				<span class="text-danger">
					{{ $errors->first('tel') }}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">ที่อยู่</label>
				<textarea class="form-control" rows="3" id="address"  name="address" placeholder="แก้ไขที่อยู่">{{$customer->address}}</textarea>
				@if ($errors->has('address'))
				<span class="text-danger">
					{{ $errors->first('address') }}
				</span>
				@endif
			</div>
			<div class="form-group">
				<div style="margin:0px 100px;">
					<button type="submit" class="btn btn-default">บันทึก</button>
					<input type="hidden" class="form-control" name="id" value="{{$customer->id}}">
				</div>
			</div>

		</div>
	</div>
</form>
@endsection
