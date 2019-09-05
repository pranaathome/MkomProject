<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class ProfileRequest extends FormRequest
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
            $username_rules = 'sometimes|string|max:255|unique:users,username' . $this->input('id');
            $email_rules = 'sometimes|email|max:100|unique:users,email,' . $this->input('id');
        } else {
            $username_rules = 'sometimes|string|max:255|unique:users,username';
            $email_rules = 'sometimes|email|max:100|unique:users,email';
        }

        return [
            'username' => $username_rules,
            'email'    => $email_rules,
            'password' => 'sometimes|confirmed|min:6',
            'level'    => 'sometimes|in:admin,mahasiswa',
        ];
    }
}
