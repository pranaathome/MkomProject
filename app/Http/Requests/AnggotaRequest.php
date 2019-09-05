<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnggotaRequest extends FormRequest
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
            $nip_rules = 'required|string|size:18|unique:anggota,nip_anggota,' . $this->input('id');
        } else {
            $nip_rules = 'required|string|size:18|unique:anggota,nip_anggota';
        }

        return [
            'nip_anggota' => $nip_rules,
            'nama_anggota' => 'required|string|max:30'
        ];
    }
}
