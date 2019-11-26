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

    public function insertForm(request $req){
        /*$vardas = $req->input('vardas');
        $pavarde = $req->input('pavarde');
        $el_pastas = $req->input('el_pastas');
        $tel_nr = $req->input('tel_nr');
        $mokytojas_id = $req->input('mokytojas_id');

        $data = array('vardas'=>$vardas,'pavarde'=>$pavarde,'el_pastas'=>$el_pastas
        , 'tel_nr'=>$tel_nr, 'mokytojas_id'=>$mokytojas_id);

        DB::table('klientu_registracijos')->insert($data);*/
        return "saved";
    }
}
