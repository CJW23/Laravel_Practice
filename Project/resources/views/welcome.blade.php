@extends('layout')

@section('title')
    welcome
@endsection

@section('content')
    welcome

    @foreach($books as $b)
        <li>{{$b}}</li>
    @endforeach
@endsection 