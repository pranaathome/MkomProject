<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KetuaRequest extends FormRequest
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
            $nip_ketua_rules = 'required|string|size:18|unique:ketua,nip_ketua,' . $this->get('id');
        } else {
            $nip_ketua_rules = 'required|string|size:18|unique:ketua,nip_ketua';
        }

        return [
            'nip_ketua' => $nip_ketua_rules,
            'nama_ketua' => 'required|string|max:30',
            'id_anggota' => 'sometimes|nullable',
        ];
    }
}
