<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DosenRequest;
use App\Dosen;
use Session;

class DosenController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dosen_list = Dosen::orderBy('nama_dosen', 'asc')->paginate(7);
        // $jumlah_dosen = Dosen::count();
        // return view('dosen.index')->with(compact('dosen_list', 'jumlah_dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosenRequest $request)
    {
        Dosen::create($request->all());
        Session::flash('flash_message', 'Data dosen berhasil disimpan.');
        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit')->with(compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(DosenRequest $request , Dosen $dosen)
    {
        $dosen->update($request->all());
        Session::flash('flash_message', 'Data dosen berhasil diupdate');
        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        Session::flash('flash_message', 'Data dosen berhasil dihapus.');
        Session::flash('penting', true);
        return redirect()->route('dosen.index');
    }
}
