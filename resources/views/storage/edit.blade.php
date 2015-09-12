@extends('layouts.master')

@section('content')

	<h1>Storage - {{ $storage->name }}</h1>
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
			<form action="/storage/{{ $storage->name }}" method="POST" id="form1">
			{!! csrf_field() !!}
			<input type="text" name="_method" value="PATCH" hidden>
			<button class="btn btn-default" form="form1" submit="submit">Save</button>
			@foreach($storage->inventory as $inventory)
				<tr>
					<td><input type="text" name="inventory[{{ $inventory->id }}][name]" class="form-control" value="{{ $inventory->name }}" required="required"></td>
					<td><input type="text" name="inventory[{{ $inventory->id }}][units]" id="input" class="form-control" value="{{ $inventory->units }}" required="required"></td>
					<td><input type="text" name="inventory[{{ $inventory->id }}][salesPrice]" id="input" class="form-control" value="{{ $inventory->salesPrice }}" required="required"></td>
					<td><input type="text" name="inventory[{{ $inventory->id }}][retailPrice]" id="input" class="form-control" value="{{ $inventory->retailPrice }}" required="required"></td>
				</tr>
			@endforeach
			</form>
			</tbody>
		</table>

@endsection