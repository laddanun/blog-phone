@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<a class="btn btn-default" href="{{route('page.create')}}" role="button">เพิ่มชื่อ</a>
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>#</td>
					<td>ชื่อ</td>
					<td>เบอร์โทร</td>
					<td>ที่อยู่</td>
					<td>Action</td>
				</tr>
				@forelse ($customer as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->tel}}</td>
					<td>{{$user->address}}</td>
					<td>
						<a class="btn btn-default" href="{{url('/edit/'.$user->id)}}" role="button">แก้ไข</a>
						<form action="{{route('page.delete',$user->id)}}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-default" type="submit">ลบ</button>
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