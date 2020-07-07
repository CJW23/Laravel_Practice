@extends('layouts.app')

@section('title')
INDEX
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                @if(Auth::check())
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" onclick='location.href="/tasks/create"'>글쓰기</button><br><br>
                @endif
                <table class="table">
                    <thead class="thead-dark">
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </thead>
                @foreach($lists as $list)
                    <tbody>
                        <tr>
                            <th scopre="row"><a href="/tasks/{{$list->id}}">{{$list->title}}</a></th>
                            <td>{{$list->des}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->email}}</td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection