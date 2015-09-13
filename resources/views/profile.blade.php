@extends('layouts.master')

@section('content')

	<div>Name: {{ $user->name }}</div>
	<div>Email: {{ $user->email }}</div>
	<div>Company: {{ $user->company->name }}</div>
	<div>Member Since: {{ $user->created_at }}</div>

	@if(count($user->roles()) > 0)
		<div> Roles:
			<ul>
				@foreach($user->roles as $role)
					<li>{{ $role->name }}</li>
				@endforeach
			</ul>
		</div>
	@endif

@endsection