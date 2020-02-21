
@include('header', ['title' => 'welcome'])

@extends('layout', ['str_temp' => '씨바 존나짱나'])
@section('print')
    아무 문장이나 출력
    @foreach( $books as $key=>$book)
        <p> books에 있는 값 {{$key}}번 : {{$book}}</p>
    @endforeach
@endsection

@include('footer')
