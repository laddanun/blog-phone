@extends('layout')
@section('content')

<form class="form-horizontal" action='{{route("create.store")}}' method="POST">
	{{ csrf_field() }}
	<div class="row" style="padding: 150px 0px;">
		<div class="col-md-2 col-md-offset-5">
			<div class="form-group">
				<label for="exampleInputEmail1">ชื่อ</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ">
				@if ($errors->has('name'))
				<span class="text-danger">
					{{ $errors->first('name') }}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">เพิ่มเบอร์โทรศัทพ์</label>
				<input type="text" class="form-control" id="tel"  name="tel" placeholder="เพิ่มเบอร์โทรศัทพ์">
				@if ($errors->has('tel'))
				<span class="text-danger">
					{{ $errors->first('tel') }}
				</span>
				@endif
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">เพิ่มที่อยู่</label>
				<textarea class="form-control" rows="3" id="address"  name="address" placeholder="เพิ่มที่อยู่"></textarea>
				@if ($errors->has('address'))
				<span class="text-danger">
					{{ $errors->first('address') }}
				</span>
				@endif
			</div>
			<div class="form-group">
				<div style="margin:0px 100px;">
					<button type="submit" class="btn btn-default">บันทึก</button>
				</div>
			</div>

		</div>
	</div>
</form>
@endsection


@section('css')

@endsection