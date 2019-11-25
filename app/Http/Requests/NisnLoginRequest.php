<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NisnLoginRequest extends FormRequest
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
        return [
            'nisn'  => 'required|numeric|digits:10'
        ];
    }

    public function messages()
    {
        return [
            'nisn.required' => 'Nisn tidak boleh kosong!',
            'nisn.numeric'  => 'Nisn hanya boleh berisi nomor!',
            'nisn.digits'   => 'Nisn Harus berisi :digits karakter!'
        ];
    }
}
