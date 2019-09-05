<?php

namespace App\Http\Controllers;

use App\Anggota;
use Session;
use App\Http\Requests\AnggotaRequest;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota_list = Anggota::orderBy('nama_anggota', 'asc')->paginate(7);
        $jumlah_anggota = Anggota::count();
        return view('ketua.index')->with(compact('anggota_list', 'jumlah_anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnggotaRequest $request)
    {
        Anggota::create($request->all());
        Session::flash('flash_message', 'Data anggota berhasil disimpan.');
        return redirect()->route('ketua.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        return view('ketua.edit')->with(compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(AnggotaRequest $request, Anggota $anggota)
    {
        $anggota->update($request->all());
        Session::flash('flash_message', 'Data dosen berhasil diupdate');
        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        Session::flash('flash_message', 'Data dosen berhasil dihapus.');
        Session::flash('penting', true);
        return redirect()->route('dosen.index');
    }
}
