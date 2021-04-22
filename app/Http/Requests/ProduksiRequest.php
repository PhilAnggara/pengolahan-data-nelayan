<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduksiRequest extends FormRequest
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
            'lokasi' => 'required',
            'pasar' => 'required',
            'ikan' => 'required',
            'hasil_produksi' => 'required',
            'terjual' => 'required|lte:hasil_produksi'
        ];
    }

    public function messages()
    {
        return [
            'lokasi.required' => 'Lokasi belum dipilih.',
            'pasar.required' => 'Pasar wajib diisi.',
            'ikan.required' => 'Jenis Ikan wajib diisi.',
            'hasil_produksi.required' => 'Hasil Produksi wajib diisi.',
            'terjual.required' => 'Terjual wajib diisi.',
            'terjual.lte' => 'Terjual tidak boleh lebih besar dari :value (Hasil Produksi).'
        ];
    }
}
