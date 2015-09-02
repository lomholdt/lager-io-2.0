@extends('layouts.master')

@section('content')

<h1>Hi There, {{Auth::user() ? Auth::user()->name : 'dude'}}!</h1> 

@endsection