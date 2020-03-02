
@include('header', ['title' => 'contact'])
@extends('layout', ['str_temp' => '씨바 존나짱나'])

@section('print')
    <h1 class="font-bold">Tasks index</h1>
    <ul>
        @foreach($tasks as $task)
            <li>{{$task->title}} {{$task->created_at}}</li>
        @endforeach
    </ul>
@endsection
