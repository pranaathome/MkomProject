<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenRequest extends FormRequest
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
            $nip_rules = 'required|string|size:18|unique:mahasiswa,nim,' . $this->input('id');
        } else {
            $nip_rules = 'required|string|size:18|unique:mahasiswa,nim';
        }

        return [
            'nip' => $nip_rules,
            'nama_dosen' => 'required|string|max:30'
        ];
    }
}
