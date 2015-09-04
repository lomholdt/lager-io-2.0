@extends('layouts.master')

@section('content')

<form action="/storage" method="POST" role="form" class="col-md-6">

	{{ csrf_field() }}

	<legend>Create New Storage</legend>

	@include('errors.error')

	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" id="" placeholder="Name" name="name">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection