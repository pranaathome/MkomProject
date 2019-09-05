<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Cek apakah CREATE atau UPDATE
        if ($this->method() == 'PATCH') {
            $nim_rules = 'required|string|size:9|unique:mahasiswa,nim,' . $this->input('id');
            $telepon_rules = 'required|numeric|unique:mahasiswa,no_telp,'  . $this->input('id') . ',id';
        } else {
            $nim_rules = 'required|string|size:9|unique:mahasiswa,nim';
            $telepon_rules = 'required|numeric|unique:mahasiswa,no_telp';
        }

        return [
            'nim' => $nim_rules,
            'nama_mhs' => 'required|string|max:30',
            'prodi' => 'required',
            'no_telp' => $telepon_rules,
            'judul' => 'required|min:10',
            'hari' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'sometimes',
            'waktu_selesai' => 'sometimes',
            'terbit' => 'required|date',
            'tempat' => 'sometimes',
            'tujuan' => 'sometimes',
            'penerima' => 'sometimes',
            'id_ketua' => 'required',
        ];
    }
}
