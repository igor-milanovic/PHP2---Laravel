<?php

namespace App\Http\Controllers;

use App\Models\StanjeObjekta;
use Illuminate\Http\Request;

class StanjeObjektaController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new StanjeObjekta();
        $this->routeName="stanje_objekta";
        $this->parameterName="stanje_objektum";
        $this->data["header"]="Stanje objekta";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
