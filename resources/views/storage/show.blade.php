@extends('layouts.master')

@section('content')
	
	<h1>Storage - {{ $storage->name }}</h1> <a href="/storage/{{ $storage->name }}/edit" class="btn btn-primary">Edit Storage</a>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Units</th>
					<th>Sales Price</th>
					<th>Retail Price</th>
				</tr>
			</thead>
			<tbody>
			@foreach($storage->inventory as $inventory)
				<tr>
					<td> {{ $inventory->name }} </td>
					<td> {{ $inventory->units }} </td>
					<td> {{ $inventory->salesPrice }} </td>
					<td> {{ $inventory->retailPrice }} </td>
				</tr>
			@endforeach
			</tbody>
		</table>
		


@endsection