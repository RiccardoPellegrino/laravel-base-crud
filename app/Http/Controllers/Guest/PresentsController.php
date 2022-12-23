<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Present;

class PresentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index(Request $request)
    {
        // if (!isset($request->query("search"))) {
        $status =  $request->query("search");

        // dd($status);
        if (isset($status)) {


            $presents = Present::where('status', $status)->get();
            // dd($presents);
        } else {
            $presents = Present::all();
        }


        return view('presents.index', compact('presents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form_data = $request->all();

        //dd($form_data);
        $new_present = Present::create($form_data);
        return redirect()->route('presents.show', $new_present->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Present $present)
    {
        return view('presents.show', compact('present'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Present $present)
    {
        return view('presents.edit', compact('present'));
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
        $present = Present::find($id);
        $form_data = $request->all();
        $present->name = $form_data['name'];
        $present->cognome = $form_data['cognome'];
        $present->citta = $form_data['citta'];
        $present->indirizzo = $form_data['indirizzo'];
        $present->n_regalo = $form_data['n_regalo'];
        $present->code_spedizione = $form_data['code_spedizione'];
        $present->camino = $form_data['camino'];
        $present->status = $form_data['status'];
        $present->desc_regalo = $form_data['desc_regalo'];
        $present->update();
        // dd($present);
        return redirect()->route('presents.show', $present->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Present $present)
    {
        $present->delete();
        return redirect()->route('presents.index');
    }
}