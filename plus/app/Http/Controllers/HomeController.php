<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $books = [
            'proter',
            'test'
        ];
        return view('welcome', ['books'=>$books]);
    }

    public function contact() {
        return view('contact');
    }
}
