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

    public function guitarists(){
        return view('pages.guitarists');
    }
}
