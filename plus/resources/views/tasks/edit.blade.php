
@include('header', ['title' => 'create task'])
@extends('layout', ['str_temp' => '오예'])

@section('print')
    <div class="px-64">
        <h1 class="font-bold">Edit Tasks</h1>
        <form action="/tasks/{{$task->id}}" method="post">
            @method('PUT')
            @csrf
            <label for="title" class="block">title</label>
            <input name="title" id="title" type="text" class="border border-gray-800 w-full" value="{{$task->title}}">
            @error('title')
            {{$message}}
            @enderror
            <label for="body" class="block">body</label>
            <textarea name="body" id="body" class="border border-gray-800 w-full">{{$task->body}}</textarea>
            <br>
            @error('title')
            {{$message}}
            @enderror
            <button class="bg-blue-600 text-white px-4 py-2 float-right">submit</button>
        </form>
    </div>

@endsection
