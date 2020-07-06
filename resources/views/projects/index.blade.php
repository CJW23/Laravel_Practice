@extends('layout');

@section('content')
    @foreach($projects as $project)
        Title : {{$project->title}}<br>
        Des : {{$}}
    @endforeach
@endsection