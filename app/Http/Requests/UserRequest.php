<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            $nim_rules = 'sometimes|nullable|string|size:9|unique:users,nim,' . $this->get('id');
            $telepon_rules = 'sometimes|nullable|numeric|unique:users,no_telp,'  . $this->get('id');
        } else {
            $nim_rules = 'sometimes|nullable|string|size:9|unique:users,nim';
            $telepon_rules = 'sometimes|nullable|numeric|unique:users,no_telp';
        }

        return [
            'password' => 'sometimes|confirmed|min:6',
            'level'    => 'sometimes|in:admin,mahasiswa',
            'nim' => $nim_rules,
            'nama_mhs' => 'sometimes|nullable|string|max:30',
            'prodi' => 'sometimes|nullable',
            'no_telp' => $telepon_rules,
            'judul' => 'sometimes|nullable|min:10',
            'hari_kolo' => 'sometimes|nullable',
            'hari_sidang' => 'sometimes|nullable',
            'tanggal_kolo' => 'sometimes|nullable|date',
            'tanggal_sidang' => 'sometimes|nullable|date',
            'waktu_mulai_kolo' => 'sometimes|nullable',
            'waktu_selesai_kolo' => 'sometimes|nullable',
            'waktu_mulai_sidang' => 'sometimes|nullable',
            'waktu_selesai_sidang' => 'sometimes|nullable',
            'terbit_penelitian' => 'sometimes|nullable|date',
            'terbit_kolo' => 'sometimes|nullable|date',
            'tempat' => 'sometimes|nullable',
            'tujuan' => 'sometimes|nullable',
            'penerima' => 'sometimes|nullable',
            'id_ketua' => 'sometimes|nullable',
        ];
    }
}
