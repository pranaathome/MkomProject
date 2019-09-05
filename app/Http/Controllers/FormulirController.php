<?php

namespace App\Http\Controllers;

use App\Formulir;
use Illuminate\Http\Request;
use App\User;
use PDF;
use Carbon\Carbon;

class FormulirController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function TanggalIndo($date)
    {
        $BulanIndo = array ("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);

        $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
        return($result);
    }

    public function FormKolokium(User $user){
        $tanggal_now = $this->TanggalIndo(Carbon::now());
        $tanggal_kolo = $this->TanggalIndo($user->tanggal_kolo);
        $waktu_mulai_kolo = date('H:i', strtotime($user->waktu_mulai_kolo));
        $waktu_selesai_kolo = date('H:i', strtotime($user->waktu_selesai_kolo));
        $pdf = PDF::loadView('formulir.form_kolokium', compact('user', 'tanggal_now', 'tanggal_kolo', 'waktu_mulai_kolo', 'waktu_selesai_kolo'))->setPaper('A4', 'portrait');
        $fileName = $user->nama_mhs;
        return $pdf->stream('Formulir Kolokium - ' . $fileName . '.pdf');
    }

    public function FormSidang(User $user){
        $tanggal_now = $this->TanggalIndo(Carbon::now());
        $tanggal_sidang = $this->TanggalIndo($user->tanggal_sidang);
        $waktu_mulai_sidang = date('H:i', strtotime($user->waktu_mulai_sidang));
        $waktu_selesai_sidang = date('H:i', strtotime($user->waktu_selesai_sidang));
        $pdf = PDF::loadView('formulir.form_sidang', compact('user', 'tanggal_now', 'tanggal_sidang', 'waktu_mulai_sidang', 'waktu_selesai_sidang'))->setPaper('A4', 'portrait');
        $fileName = $user->nama_mhs;
        return $pdf->stream('Formulir Sidang - ' . $fileName . '.pdf');
    }


    public function PermohonanData(User $user){
        $terbit_penelitian = $this->TanggalIndo($user->terbit_penelitian);
        $pdf = PDF::loadView('formulir.permohonan_data', compact('user', 'terbit_penelitian'))->setPaper('A4', 'portrait');
        $fileName = $user->nama_mhs;
        return $pdf->stream('Surat Permohonan Data - ' . $fileName . '.pdf');
    }

    public function UndanganKolokium(User $user){
        $tanggal_kolo = $this->TanggalIndo($user->tanggal_kolo);
        $terbit_kolo = $this->TanggalIndo($user->terbit_kolo);
        $waktu_mulai_kolo = date('H:i', strtotime($user->waktu_mulai_kolo));
        $waktu_selesai_kolo = date('H:i', strtotime($user->waktu_selesai_kolo));
        $pdf = PDF::loadView('formulir.undangan_kolokium', compact('user', 'tanggal_kolo', 'terbit_kolo', 'waktu_mulai_kolo', 'waktu_selesai_kolo'))->setPaper('A4', 'portrait');
        $fileName = $user->nama_mhs;
        return $pdf->stream('Surat Undangan Kolokium - ' . $fileName . '.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_list = Formulir::all();
        return view('user.index', compact('form_list'));
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
     * @param  \App\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function show(Formulir $formulir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulir $formulir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulir $formulir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulir $formulir)
    {
        //
    }
}
