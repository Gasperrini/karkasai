<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klientu_registracijos;
use DB;

class Klientu_Registracijos_Controller extends Controller
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

        $registrations = Klientu_registracijos::orderBy('id','desc')->paginate(1);
        return view ('reservations.index')->with('registrations', $registrations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return view('pages.form');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/*Request $request*/)
    {
        /*$registrations = new Klientu_registracijos();
        $registrations->vardas = request('vardas');
        $registrations->pavarde = request('pavarde');
        $registrations->el_pastas = request('el_pastas');
        $registrations->tel_nr = request('tel_nr');
        $registrations->mokytojas_id = request('mokytojas_id');
        $registrations->save();
        $this->validate($request, [
            'vardas'    =>  'required',
            'pavarde'    =>  'required',
            'el_pastas'    =>  'required',
            'tel_nr'    =>  'required',
            'mokytojas_id'    =>  'required'
        ]);

        $registration = new Klientu_registracijos([
            'vardas'   => $request->get('vardas'),
            'pavarde'  => $request->get('pavarde'),
            'el_pastas'=>    $request->get('el_pastas'),
            'tel_nr'   => $request->get('tel_nr'),
            'mokytojas_id' =>   $request->get('mokytojas_id')
        ]);
        $registration->save();
        return redirect()->route('pages.form')->with('success', 'Registracija atlikta!');
        */}

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
