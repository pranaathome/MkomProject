<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Requests\MahasiswaRequest;
use Session;
use PDF;

class MahasiswaController extends Controller
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
        $mhs_list = Mahasiswa::orderBy('nim', 'asc')->paginate(7);
        $jumlah_mhs = Mahasiswa::count();
        return view('mahasiswa.index')->with(compact('mhs_list', 'jumlah_mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        $input = $request->all();

        // Insert Mahasiswa
        $mhs = Mahasiswa::create($input);

        $request->user()->mahasiswa()->create([
            'user' => $request->user()->id
         ]);

        // Waktu
        // $mhs_time = new Mahasiswa($input);
        // $input['waktu_mulai'] = ':00';
        // $input['waktu_selesai'] = ':00';
        // $mhs_time->save();

        // Simpan data formulir
        // Insert Hari.
        // if ($request->filled('hari')) {
        //     $this->insertHari($mhs, $request);
        // }

        // // Insert Tanggal.
        // if ($request->filled('tanggal')) {
        //     $this->insertTanggal($mhs, $request);
        // }

        // // Insert Waktu Mulai.
        // if ($request->filled('waktu_mulai')) {
        //     $this->insertWaktuMulai($mhs, $request);
        // }

        // // Insert Waktu Selesai.
        // if ($request->filled('waktu_selesai')) {
        //     $this->insertWaktuSelesai($mhs, $request);
        // }

        // // Insert Terbit.
        // if ($request->filled('terbit')) {
        //     $this->insertTerbit($mhs, $request);
        // }

        // // Insert Tujuan.
        // if ($request->filled('tujuan')) {
        //     $this->insertTujuan($mhs, $request);
        // }

        // // Insert Tempat.
        // if ($request->filled('tempat')) {
        //     $this->insertTempat($mhs, $request);
        // }

        Session::flash('flash_message', 'Data mahasiswa berhasil disimpan');

        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    // public function show(Mahasiswa $mhs)
    // {
    //     return view('mahasiswa.show')->with(compact('mhs'));
    // }

    public function show(Mahasiswa $mhs)
    {
        return view('mahasiswa.show')->with(compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mhs)
    {
        // if (!empty($mhs->formulir->hari)) {
        //     $mhs->hari = $mhs->formulir->hari;
        // }

        // if (!empty($mhs->formulir->tanggal)) {
        //     $mhs->tanggal = $mhs->formulir->tanggal;
        // }

        // if (!empty($mhs->formulir->waktu_mulai)) {
        //     $mhs->waktu_mulai = $mhs->formulir->waktu_mulai;
        // }

        // if (!empty($mhs->formulir->waktu_selesai)) {
        //     $mhs->waktu_selesai = $mhs->formulir->waktu_selesai;
        // }

        // if (!empty($mhs->formulir->terbit)) {
        //     $mhs->terbit = $mhs->formulir->terbit;
        // }

        // if (!empty($mhs->formulir->tujuan)) {
        //     $mhs->tujuan = $mhs->formulir->tujuan;
        // }

        // if (!empty($mhs->formulir->tempat)) {
        //     $mhs->tempat = $mhs->formulir->tempat;
        // }

        return view('mahasiswa.edit')->with(compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, Mahasiswa $mhs)
    {
        $input = $request->all();

        // Update data mahasiswa
        $mhs->update($input);

        // // Update hari
        // $this->updateHari($mhs, $request);

        // // Update tanggal
        // $this->updateTanggal($mhs, $request);

        // // Update waktu mulai
        // $this->updateWaktuMulai($mhs, $request);

        // // Update waktu selesai
        // $this->updateWaktuSelesai($mhs, $request);

        // // Update terbit
        // $this->updateTerbit($mhs, $request);

        // // Update tujuan
        // $this->updateTujuan($mhs, $request);

        // // Update tempat
        // $this->updateTempat($mhs, $request);

        Session::flash('flash_message', 'Data mahasiswa berhasil di update');

        return redirect()->route('mahasiswa.show', $mhs->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mhs)
    {
        $mhs->delete();

        // Flash Message
        Session::flash('flash_message', 'Data siswa berhasil dihapus.');
        Session::flash('penting', true);
        return redirect()->route('mahasiswa.index');
    }

    public function cari(Request $request){
        $kata_kunci = trim($request->input('kata_kunci'));

        if (!empty($kata_kunci)) {
            $prodi = $request->input('prodi');
            $id_dosen = $request->input('id_dosen');

            // Query
            $query = Mahasiswa::where('nama', 'LIKE', '%' . $kata_kunci . '%');
            (! empty($prodi)) ? $query->ProgramStudi($prodi) : '';
            (! empty($id_dosen)) ? $query->Dosen($id_dosen) : '';

            $mhs_list = $query->paginate(5);

            // URL Links pagination
            $pagination = (! empty($prodi)) ? $mhs_list->appends(['prodi' => $prodi]) : '';
            $pagination = (! empty($id_dosen)) ? $mhs_list->appends(['id_dosen' => $id_dosen]) : '';
            $pagination = $mhs_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_mhs = $mhs_list->total();
            return view('mahasiswa.index')
                ->with(compact('mhs_list', 'kata_kunci', 'pagination', 'jumlah_mhs', 'id_dosen', 'prodi'));
        }

        return redirect()->route('mahasiswa.index');
    }

    public function formKolokium(Mahasiswa $mhs){
        $pdf = PDF::loadView('mahasiswa.pdf.form_kolokium', compact('mhs'))->setPaper('A4', 'portrait');
        $fileName = $mhs->nama_mhs;
        return $pdf->stream('Formulir Kolokium - ' . $fileName . '.pdf');
    }

    public function formSidang(Mahasiswa $mhs){
        $pdf = PDF::loadView('mahasiswa.pdf.form_sidang', compact('mhs'))->setPaper('A4', 'portrait');
        $fileName = $mhs->nama_mhs;
        return $pdf->stream('Formulir Sidang - ' . $fileName . '.pdf');
    }

    public function permohonanData(Mahasiswa $mhs){
        $pdf = PDF::loadView('mahasiswa.pdf.permohonan_data', compact('mhs'))->setPaper('A4', 'portrait');
        $fileName = $mhs->nama_mhs;
        return $pdf->stream('Surat Permohonan Data - ' . $fileName . '.pdf');
    }

    public function undanganKolokium(Mahasiswa $mhs){
        $pdf = PDF::loadView('mahasiswa.pdf.undangan_kolokium', compact('mhs'))->setPaper('A4', 'portrait');
        $fileName = $mhs->nama_mhs;
        return $pdf->stream('Undangan Kolokium - ' . $fileName . '.pdf');
    }


    // private function insertHari(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     $formulir = new Formulir;
    //     $formulir->hari = $request->input('hari');
    //     $mhs->formulir()->save($formulir);
    // }

    // private function updateHari(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     if ($mhs->formulir) {
    //         // Jika hari diisi, update.
    //         if ($request->filled('hari')) {
    //             $formulir = $mhs->formulir;
    //             $formulir->hari = $request->input('hari');
    //             $mhs->formulir()->save($formulir);
    //         }
    //         // Jika hari tidak diisi, hapus.
    //         else {
    //             $mhs->formulir()->delete();
    //         }
    //     }
    //     // Buat entry baru, jika sebelumnya tidak ada hari.
    //     else {
    //         if ($request->filled('hari')) {
    //             $formulir = new Formulir;
    //             $formulir->hari = $request->input('hari');
    //             $mhs->formulir()->save($formulir);
    //         }
    //     }
    // }

    // private function insertTanggal(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     $formulir = new Formulir;
    //     $formulir->tanggal = $request->input('tanggal');
    //     $mhs->formulir()->save($formulir);
    // }

    // private function updateTanggal(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     if ($mhs->formulir) {
    //         // Jika tanggal diisi, update.
    //         if ($request->filled('tanggal')) {
    //             $formulir = $mhs->formulir;
    //             $formulir->tanggal = $request->input('tanggal');
    //             $mhs->formulir()->save($formulir);
    //         }
    //         // Jika tanggal tidak diisi, hapus.
    //         else {
    //             $mhs->formulir()->delete();
    //         }
    //     }
    //     // Buat entry baru, jika sebelumnya tidak ada tanggal.
    //     else {
    //         if ($request->filled('tanggal')) {
    //             $formulir = new Formulir;
    //             $formulir->tanggal = $request->input('tanggal');
    //             $mhs->formulir()->save($formulir);
    //         }
    //     }
    // }

    // private function insertWaktuMulai(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     $formulir = new Formulir;
    //     $formulir->waktu_mulai = $request->input('waktu_mulai');
    //     $mhs->formulir()->save($formulir);
    // }

    // private function updateWaktuMulai(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     if ($mhs->formulir) {
    //         // Jika waktu_mulai diisi, update.
    //         if ($request->filled('waktu_mulai')) {
    //             $formulir = $mhs->formulir;
    //             $formulir->waktu_mulai = $request->input('waktu_mulai');
    //             $mhs->formulir()->save($formulir);
    //         }
    //         // Jika waktu_mulai tidak diisi, hapus.
    //         else {
    //             $mhs->formulir()->delete();
    //         }
    //     }
    //     // Buat entry baru, jika sebelumnya tidak ada waktu_mulai.
    //     else {
    //         if ($request->filled('waktu_mulai')) {
    //             $formulir = new Formulir;
    //             $formulir->waktu_mulai = $request->input('waktu_mulai');
    //             $mhs->formulir()->save($formulir);
    //         }
    //     }
    // }

    // private function insertWaktuSelesai(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     $formulir = new Formulir;
    //     $formulir->waktu_selesai = $request->input('waktu_selesai');
    //     $mhs->formulir()->save($formulir);
    // }

    // private function updateWaktuSelesai(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     if ($mhs->formulir) {
    //         // Jika waktu_selesai diisi, update.
    //         if ($request->filled('waktu_selesai')) {
    //             $formulir = $mhs->formulir;
    //             $formulir->waktu_selesai = $request->input('waktu_selesai');
    //             $mhs->formulir()->save($formulir);
    //         }
    //         // Jika waktu_selesai tidak diisi, hapus.
    //         else {
    //             $mhs->formulir()->delete();
    //         }
    //     }
    //     // Buat entry baru, jika sebelumnya tidak ada waktu_selesai.
    //     else {
    //         if ($request->filled('waktu_selesai')) {
    //             $formulir = new Formulir;
    //             $formulir->waktu_selesai = $request->input('waktu_selesai');
    //             $mhs->formulir()->save($formulir);
    //         }
    //     }
    // }

    // private function insertTerbit(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     $formulir = new Formulir;
    //     $formulir->terbit = $request->input('terbit');
    //     $mhs->formulir()->save($formulir);
    // }

    // private function updateTerbit(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     if ($mhs->formulir) {
    //         // Jika terbit diisi, update.
    //         if ($request->filled('terbit')) {
    //             $formulir = $mhs->formulir;
    //             $formulir->terbit = $request->input('terbit');
    //             $mhs->formulir()->save($formulir);
    //         }
    //         // Jika terbit tidak diisi, hapus.
    //         else {
    //             $mhs->formulir()->delete();
    //         }
    //     }
    //     // Buat entry baru, jika sebelumnya tidak ada terbit.
    //     else {
    //         if ($request->filled('terbit')) {
    //             $formulir = new Formulir;
    //             $formulir->terbit = $request->input('terbit');
    //             $mhs->formulir()->save($formulir);
    //         }
    //     }
    // }

    // private function insertTujuan(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     $formulir = new Formulir;
    //     $formulir->tujuan = $request->input('tujuan');
    //     $mhs->formulir()->save($formulir);
    // }

    // private function updateTujuan(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     if ($mhs->formulir) {
    //         // Jika tujuan diisi, update.
    //         if ($request->filled('tujuan')) {
    //             $formulir = $mhs->formulir;
    //             $formulir->tujuan = $request->input('tujuan');
    //             $mhs->formulir()->save($formulir);
    //         }
    //         // Jika tujuan tidak diisi, hapus.
    //         else {
    //             $mhs->formulir()->delete();
    //         }
    //     }
    //     // Buat entry baru, jika sebelumnya tidak ada tujuan.
    //     else {
    //         if ($request->filled('tujuan')) {
    //             $formulir = new Formulir;
    //             $formulir->tujuan = $request->input('tujuan');
    //             $mhs->formulir()->save($formulir);
    //         }
    //     }
    // }

    // private function insertTempat(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     $formulir = new Formulir;
    //     $formulir->tempat = $request->input('tempat');
    //     $mhs->formulir()->save($formulir);
    // }

    // private function updateTempat(Mahasiswa $mhs, MahasiswaRequest $request) {
    //     if ($mhs->formulir) {
    //         // Jika tempat diisi, update.
    //         if ($request->filled('tempat')) {
    //             $formulir = $mhs->formulir;
    //             $formulir->tempat = $request->input('tempat');
    //             $mhs->formulir()->save($formulir);
    //         }
    //         // Jika tempat tidak diisi, hapus.
    //         else {
    //             $mhs->formulir()->delete();
    //         }
    //     }
    //     // Buat entry baru, jika sebelumnya tidak ada tempat.
    //     else {
    //         if ($request->filled('tempat')) {
    //             $formulir = new Formulir;
    //             $formulir->tempat = $request->input('tempat');
    //             $mhs->formulir()->save($formulir);
    //         }
    //     }
    // }
}
