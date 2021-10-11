@extends('layout')

@section('title', 'About')

@section('content')

    <h3>About Page</h3>

    @foreach($data as $key => $value)

        {{$key. ' = ' .$value}} 

    @endforeach

@endsection