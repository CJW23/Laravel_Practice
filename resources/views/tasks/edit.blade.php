@extends('layout')

@section('title')
EDIT
@endsection

@section('content')
<form action='/tasks/{{$task->id}}' method='POST'>
    @csrf
    @method('PUT')
    <div>
        <input type="text" value="{{$task->title}}" name="title" id="title">
        @error('title')
        {{$message}}
        @enderror
    </div>
    <div>
        <textarea name="des" id="des">{{$task->des}}</textarea>
        @error('des')
        {{$message}}
        @enderror
    </div>
    <button>submit</button>
</form> 
@endsection