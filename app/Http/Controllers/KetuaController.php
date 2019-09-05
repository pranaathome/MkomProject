<?php

namespace App\Http\Controllers;

use App\Ketua;
use App\Anggota;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\KetuaRequest;

class KetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ketua_list = Ketua::orderBy('nama_ketua', 'asc')->paginate(7);
        $jumlah_ketua = Ketua::count();
        return view('ketua.index')->with(compact('ketua_list', 'jumlah_ketua'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ketua.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KetuaRequest $request)
    {
        $ketua = Ketua::create($request->all());

        // $anggota = new Anggota;
        // $anggota->nama_anggota = $request->input('nama_anggota');
        // $ketua->anggota()->save($anggota);

        // $anggota = new Anggota;
        // $anggota->nip_anggota = $request->input('nip_anggota');
        // $ketua->anggota()->save($anggota);

        Session::flash('flash_message', 'Data ketua berhasil disimpan.');
        return redirect()->route('ketua.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ketua  $ketua
     * @return \Illuminate\Http\Response
     */
    public function show(Ketua $ketua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ketua  $ketua
     * @return \Illuminate\Http\Response
     */
    public function edit(Ketua $ketua)
    {
        if (!empty($ketua->anggota->nama_anggota)) {
            $ketua->nama_anggota = $ketua->anggota->nama_anggota;
        }

        if (!empty($ketua->anggota->nip_anggota)) {
            $ketua->nip_anggota = $ketua->anggota->nip_anggota;
        }

        return view('ketua.edit')->with(compact('ketua'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ketua  $ketua
     * @return \Illuminate\Http\Response
     */
    public function update(KetuaRequest $request, Ketua $ketua)
    {
        $input = $request->all();

        $ketua->update($input);

        // if ($ketua->anggota) {
        //     if ($request->filled('nama_anggota')) {
        //         $anggota = $ketua->anggota;
        //         $anggota->nama_anggota = $request->input('nama_anggota');
        //         $ketua->anggota()->save($anggota);
        //     }
        //     else {
        //         $ketua->anggota()->delete();
        //     }
        // }
        // else {
        //     if ($request->filled('nama_anggota')) {
        //         $anggota = new Anggota;
        //         $anggota->nama_anggota = $request->input('nama_anggota');
        //         $ketua->anggota()->save($anggota);
        //     }
        // }

        // if ($ketua->anggota) {
        //     if ($request->filled('nip_anggota')) {
        //         $anggota = $ketua->anggota;
        //         $anggota->nip_anggota = $request->input('nip_anggota');
        //         $ketua->anggota()->save($anggota);
        //     }
        //     else {
        //         $ketua->anggota()->delete();
        //     }
        // }
        // else {
        //     if ($request->filled('nip_anggota')) {
        //         $anggota = new Anggota;
        //         $anggota->nip_anggota = $request->input('nip_anggota');
        //         $ketua->anggota()->save($anggota);
        //     }
        // }

        Session::flash('flash_message', 'Data dosen berhasil diupdate');
        return redirect()->route('ketua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ketua  $ketua
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ketua $ketua)
    {
        $ketua->delete();
        Session::flash('flash_message', 'Data dosen berhasil dihapus.');
        Session::flash('penting', true);
        return redirect()->route('dosen.index');
    }
}
