
@include('header', ['title' => 'task detail'])
@extends('layout', ['str_temp' => '오예'])

@section('print')
    <div class="px-64">
        <div class="flex">
            <h1 class="font-bold text-3xl flex-1">Tasks detail</h1>
            <a href="/tasks/{{ $task->id }}/edit">
                <button class="flex-initial bg-green-500 text-white hover:bg-green-600 px-4 py-1">Edit</button>
            </a>
            <form method="post" action="" class="float-right ml-2">
                @method('DELETE')
                @csrf
                <a href="/tasks/{{ $task->id }}">
                    <button class="flex-initial bg-red-500 text-white hover:bg-red-600 px-4 py-1">Delete</button>
                </a>
            </form>
        </div>

        Title : {{ $task->title }} <small class="float-right">Created at {{$task->created_at}}</small><br>
        body
        <div class="border">{{ $task->body}} </div>

    </div>

@endsection
