
@include('header', ['title' => 'create task'])
@extends('layout', ['str_temp' => '오예'])

@section('print')
    <h1 class="font-bold">create Tasks</h1>create Tasks<br>

    <form action="/tasks/store" method="post">
        <label for="title" class="block">title</label>
        <input name="title" id="title" type="text" class="border border-gray-800">

        <label for="body" class="block">body</label>
        <textarea name="body" id="body" class="border border-gray-800"></textarea>
        <br>

        <button class="bg-blue-800">submit</button>
    </form>
@endsection
