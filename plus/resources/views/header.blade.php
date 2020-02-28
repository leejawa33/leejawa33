<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>

        <link rel="stylesheet" href="{{mix('css/tailwind.css')}}">

    </head>
    <body>

    <ul >
        <li> <a href="/">메인</a></li>
        <li> <a href="/contact">contact</a></li>
    </ul>

