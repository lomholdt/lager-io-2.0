@extends('layouts.master')

@section('content')

<form action="/storage/{{ $storage->name }}/inventory" method="POST" role="form">
	<legend>Add new inventory to {{ $storage->name }}</legend>
	
	{!! csrf_field() !!}

	@include('errors.error')

	<div class="form-group">
		<input type="text" class="form-control" name="name" placeholder="Inventory Name">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection