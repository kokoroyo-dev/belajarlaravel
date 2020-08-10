@extends('layouts.app')
@section('title','Matakuliah Page')
@section('bread1','Matakuliah')
@section('bread2','Data')
@section('content')

<h3>Master Data Matakuliah</h3>

<p><a href="/matakuliah/create" class="btn btn-success btn-sm">+ Tambah</a></p>
<table class="table table-striped" id="example1">
	<thead>
		<th>No</th>
		<th>Kode Mk</th>
		<th>Matakuliah</th>
		<th>SKS</th>
		<th>Semester</th>
		<th >Pilihan</th>
	</thead>
	<tbody>
		@foreach($mk as $key => $item)
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$item->kode_mk}}</td>
			<td>{{$item->nama_mk}}</td>
			<td>{{$item->sks}}</td>
			<td>{{$item->semester}}</td>
			<td>
				<div class="row" style="margin-top: -5px;">
					<div class="col col-2" style="margin-left: -12px;">
						<button class="btn btn-primary btn-sm"><a style="color: white;" href="{{ url("matakuliah/{$item->kode_mk}/edit")}}">Edit</a></button>
					</div>
						<div class="col col-1" style="margin-right: -35px;"></div>
					<div class="col col-2">
					<form action="{{url("matakuliah/$item->kode_mk")}}" method="post">
					@csrf
					@method('DELETE')

					<button class="btn btn-danger btn-sm">Delete</button>

					</form>
					</div>
				</div>
				
				
				
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<script>
		$(document).ready(function() {
    	$('#example1').DataTable();
		} );
	</script>


@endsection
