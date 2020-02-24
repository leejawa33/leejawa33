
@include('header', ['title' => 'projects'])

@extends('layout', ['str_temp' => '씨바 존나짱나'])
@section('print')
    프로젝트 페이지
    <h1>project list</h1>
    @foreach($projects as $project)
        Titlt : {{$project->title}}<Br>

    @endforeach
@endsection

@include('footer')
