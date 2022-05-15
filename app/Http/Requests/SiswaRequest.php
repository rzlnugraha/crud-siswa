<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required|in:M,F',
            'alamat' => 'required',
            'sekolah_id' => 'required|exists:sekolahs,id'
        ];
    }
}
