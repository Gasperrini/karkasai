<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use DB;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function contacts(){
        return view('pages.contacts');
    }

    public function form(){
        return view('pages.form');
    }

    public function guitarists(){
        return view('pages.guitarists');
    }

    public function news(){
        return view('pages.news');
    }
}
