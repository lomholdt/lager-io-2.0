@extends('layouts.master')

@section('content')

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
	
    @include('errors.error')

    <div class="form-group">
    	<input type="text" name="company" id="inputCompany" class="form-control" value="" title="" placeholder="Company">
    </div>

    <div class="form-group">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
    </div>

    <div class="form-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
    </div>

    <div class="checkbox">
    	<label>
        	<input type="checkbox" name="remember"> Remember Me
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>

@endsection