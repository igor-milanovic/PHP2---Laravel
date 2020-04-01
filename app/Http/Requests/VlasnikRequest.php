<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VlasnikRequest extends BasicRequest
{

    public function rules()
    {
        return [
            "ime"=>"required|min:3",
            "telefon"=>"required",
        ];
    }
}
