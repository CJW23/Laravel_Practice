@extends('layout')

@section('title')
CREATE
@endsection

@section('content')
<form action='/tasks' method='POST'>
    @csrf
    <div>
        <input type="text" name="title" id="title">
        @error('title')
        {{$message}}
        @enderror
    </div>
    <div>
        <textarea name="des" id="des"></textarea>
        @error('des')
        {{$message}}
        @enderror
    </div>
    <button>submit</button> 
@endsection