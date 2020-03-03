
@include('header', ['title' => 'contact'])
@extends('layout', ['str_temp' => '씨바 존나짱나'])

@section('print')
    <div class="flex">
        <h1 class="font-bold flex-1">Tasks index</h1>
        <a href="/tasks/create">
            <button class="bg-green-500 hover:bg-green-600 float-right px-4 py-2 text-white">create task</button>
        </a>
    </div>
    <ul>
        @foreach($tasks as $task)
            <a href="/tasks/{{$task->id}}">
                <li class="border my-3 p-3">
                    {{$task->title}} {{$task->created_at}}
                </li>
            </a>
        @endforeach
    </ul>
@endsection
