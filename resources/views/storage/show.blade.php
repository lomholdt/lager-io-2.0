@extends('layouts.master')

@section('content')
	
	<h1>Storage - {{ $storage->name }}</h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Units</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
			@foreach($storage->inventory as $inventory)
				<tr>
					<td> {{ $inventory->name }} </td>
					<td> {{ $inventory->units }} </td>
					<td> {{ $inventory->price }} </td>
				</tr>
			@endforeach
			</tbody>
		</table>
		


@endsection