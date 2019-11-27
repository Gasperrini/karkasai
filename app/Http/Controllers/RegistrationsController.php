<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Registration;
class RegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$questions = DB::select('SELECT * FROM questions');
        //$questions = Question::orderBy('id','desc')->take(1)->get();
        //$questions = Question::orderBy('id','desc')->get();

        $registrations = Registration::orderBy('id','desc')->paginate(10);
        return view ('registrations.index')->with('registrations', $registrations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'vardas'    =>  'required',
            'pavarde'    =>  'required',
            'el_pastas'    =>  'required',
            'tel_nr'    =>  'required',
            'mokytojas_id'    =>  'required'
        ]);
        $post = $request->all();

        Registration::create($post);

        return redirect('/registrations/create')->with('status', 'Registracija atlikta!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrations = Registration::find($id);
        return view('registrations.edit')->with('registrations', $registrations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'vardas'    =>  'required',
            'pavarde'    =>  'required',
            'el_pastas'    =>  'required',
            'tel_nr'    =>  'required',
            'mokytojas_id'    =>  'required'
        ]);
        $post = Registration::find($id);
        $post->vardas = $request->input('vardas');
        $post->pavarde = $request->input('pavarde');
        $post->el_pastas = $request->input('el_pastas');
        $post->tel_nr = $request->input('tel_nr');
        $post->mokytojas_id = $request->input('mokytojas_id');
        $post->save();

        return redirect('/registrations')->with('status', 'Registracija atnaujinta!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Registration::find($id);
        $post->delete();
        return redirect('/registrations')->with('status', 'Registracija panaikinta!');
    }
}
