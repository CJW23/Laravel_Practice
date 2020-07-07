@extends('layouts.app')

@section('title')
EDIT
@endsection

@section('content')
<form action='/tasks/{{$task->id}}' method='POST'>
    @csrf
    @method('PUT')
    <div>
        <input type="text" name="title" id="title" value="{{old('title') ? old('title'):$task->title}}">
        @error('title')
        {{$message}}
        @enderror
    </div>
    <div>
        <textarea name="des" id="des">{{old('des') ? old('des'):$task->des}}</textarea>
        @error('des')
        {{$message}}
        @enderror
    </div>
    <button>submit</button>
</form> 
@endsection