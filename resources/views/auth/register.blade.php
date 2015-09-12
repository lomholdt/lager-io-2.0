@extends('layouts.master')

@section('content')

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}
	
    @include('errors.error')

    <div class="form-group">
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
    </div>

    <div class="form-group">
    	<select name="company_id" id="inputCompany_id" class="form-control">
    		@foreach($companies as $company)
    			<option value="{{ $company->id }}">{{ $company->name }}</option>
    		@endforeach
    	</select>
    </div>

    <div class="form-group">
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control">
    </div>

    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>

    <div class="form-group">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>

@endsection