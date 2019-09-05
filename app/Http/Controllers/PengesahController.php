<?php

namespace App\Http\Controllers;

use App\Pengesah;
use Illuminate\Http\Request;

class PengesahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengesah.index');
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
     * @param  \App\Pengesah  $pengesah
     * @return \Illuminate\Http\Response
     */
    public function show(Pengesah $pengesah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengesah  $pengesah
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengesah $pengesah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengesah  $pengesah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengesah $pengesah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengesah  $pengesah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengesah $pengesah)
    {
        //
    }
}
