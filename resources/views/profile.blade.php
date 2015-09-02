@extends('layouts.master')

@section('content')

<div>Name: {{ $user->name }}</div>
<div>Company: {{ $user->company->name }}</div>
<div>Member Since: {{ $user->created_at }}</div>

@endsection