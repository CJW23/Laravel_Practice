@extends('layouts.app')

@section('title')
CREATE
@endsection

@section('content')
<form action='/tasks' method='POST'>
    @csrf
    <br>
    <div>
        <input type="text" class="form-control" style="display : block; margin : 0 auto; width:600px; height:50px;" name="title" id="title"
            value="{{old('title') ? old('title'):''}}" placeholder="Title">
        @error('title')
        {{$message}}
        @enderror
    </div>
    <br>
    <div>
        <textarea name="des" id="des" class="form-control"
            style="display : block; margin : 0 auto; width:600px; height:500px;">{{old('des') ? old('des'):''}}</textarea>
        @error('des')
        {{$message}}
        @enderror
    </div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" style="display : block; margin : 0 auto;">submit</button>

    </div>
</form>
@endsection