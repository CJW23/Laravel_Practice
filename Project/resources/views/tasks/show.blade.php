@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->id == $task->userid)
    <button onclick='location.href="/tasks/{{$task->id}}/edit"'>Edit</button><br>
    <form action="/tasks/{{$task->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button onclick='location.href="/tasks/{{$task->id}}"'>Delete</button>
    </form>
    @endif
    {{$task}}
@endsection