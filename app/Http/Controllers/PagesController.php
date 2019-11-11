<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about', ['nama' => 'Hanan Hanafi']);
    }

    public function dashboard(){
        return view('dashboard');
    }
}
