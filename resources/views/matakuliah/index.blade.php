@extends('layouts.app')
@section('title','matakuliah page')
@section('bread1','mata kuliah')
@section('bread2','data')
@section('content')

<h3>master data program studi</h3>
<table class="table table-striped" id="dsn-table">
	<thead>
		<th>No</th>
		<th>Kode matakuliah</th>
		<th>Mata Kuliah</th>
		<th>SKS</th>
	</thead>
	<tbody>
		@foreach($list_matakuliah as $key => $item)
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$item->kode_mk}}</td>
			<td>{{$item->nama_mk}}</td>
			<td>{{$item->sks}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
