<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NekretninaRequest extends FormRequest
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
            'brSoba' => 'exists:brSoba,id',
            'opstina' => 'exists:opstina,id',
            'sprat' => 'exists:sprat,id',
            'stanje_objekta' => 'exists:stanje,id',
            'tip_nekretnine' => 'exists:tip_nekretnine,id',
            'tip_objekta' => 'exists:tip_objekta,id',
            'tip_usluge' => 'exists:tip_usluge,id',
            'ulica' => 'exists:ulica,id',
            'vlasnik' => 'exists:vlasnik,id',
            'slika' => 'required|file|mimes:jpeg,jpg,png| max:2000'
        ];
    }
}
