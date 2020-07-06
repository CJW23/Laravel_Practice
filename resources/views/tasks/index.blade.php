@extends('layout')

@section('title')
INDEX
@endsection

@section('content')
    <button onclick='location.href="/tasks/create"'>글쓰기</button><br>
    @foreach($lists as $list)
        <a href="/tasks/{{$list->id}}">
        Title : {{$list->title}}
        Des : {{$list->des}}
        </a>
        <br><br>
    @endforeach
@endsection