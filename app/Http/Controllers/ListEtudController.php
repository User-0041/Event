<?php

namespace App\Http\Controllers;

use App\Models\ListEtudiant;
use Illuminate\Http\Request;

class ListEtudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListEtudiant  $listEtudiant
     * @return \Illuminate\Http\Response
     */
    public function show(ListEtudiant $listEtudiant)
    {
        $data=[
            'xxxx' => 'xxx: '.$listEtudiant->nom,
        ];
        return view('list_etudiants.list_etud', $data);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListEtudiant  $listEtudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(ListEtudiant $listEtudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListEtudiant  $listEtudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListEtudiant $listEtudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListEtudiant  $listEtudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListEtudiant $listEtudiant)
    {
        //
    }
}
