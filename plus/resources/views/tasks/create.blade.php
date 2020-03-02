
@include('header', ['title' => 'create task'])
@extends('layout', ['str_temp' => '오예'])

@section('print')
    <h1 class="font-bold">create Tasks</h1>
    <div>
        <form action="/task" method="post">
            @csrf
            <label for="title" class="block">title</label>
            <input name="title" id="title" type="text" class="border border-gray-800 w-full">

            <label for="body" class="block">body</label>
            <textarea name="body" id="body" class="border border-gray-800 w-full"></textarea>
            <br>

            <button class="bg-blue-600 text-white px-4 py-2 float-right">submit</button>
        </form>
    </div>

@endsection
