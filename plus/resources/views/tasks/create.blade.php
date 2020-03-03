
@include('header', ['title' => 'create task'])
@extends('layout', ['str_temp' => '오예'])

@section('print')
    <div class="px-64">
        <h1 class="font-bold">create Tasks</h1>
        <form action="/tasks" method="post">
            @csrf
            <label for="title" class="block">title</label>
            <input name="title" id="title" type="text" class="border border-gray-800 w-full @error('title')border-red-700 @enderror" >
            @error('title')
            {{$message}}
            @enderror
            <label for="body" class="block">body</label>
            <textarea name="body" id="body" class="border border-gray-800 w-full @error('body')border-red-700 @enderror" ></textarea>
            @error('body')
            {{$message}}
            @enderror
            <br>

            <button class="bg-blue-600 text-white px-4 py-2 float-right">submit</button>
        </form>
    </div>

@endsection
