<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;
use App\Models\TipObjekta;
use Illuminate\Http\Request;

class TipObjektaController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new TipObjekta();
        $this->routeName="tip_objekta";
        $this->parameterName="tip_objektum";
        $this->data["header"]="Tip objekta";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
