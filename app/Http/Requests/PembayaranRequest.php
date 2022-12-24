<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembayaranRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_petugas' => ['required','integer'],
            'id_siswa' => ['required','integer'],
            'id_spp' => ['required','integer'],
            'jumlah_bayar' => ['required','integer'],
        ];
    }
}
