<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;
use App\Models\TipNekretnine;
use Illuminate\Http\Request;

class TipNekretnineController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new TipNekretnine();
        $this->routeName="tip_nekretnine";
        $this->parameterName="tip_nekretnine";
        $this->data["header"]="Tip nekretnina";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
