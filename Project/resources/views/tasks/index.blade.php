@extends('layouts.app')

@section('title')
INDEX
@endsection

@section('content')
    @if(Auth::check())
    <button onclick='location.href="/tasks/create"'>글쓰기</button><br>
    @endif
    @foreach($lists as $list)
        <a href="/tasks/{{$list->id}}">
        Title : {{$list->title}}
        Des : {{$list->des}}
        </a>
        <br><br>
    @endforeach
@endsection