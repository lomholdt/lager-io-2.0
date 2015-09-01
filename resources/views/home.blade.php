@extends('layouts.master')

@section('content')

<h1>Hi There, {{Auth::user()->name}}!</h1> 

@endsection