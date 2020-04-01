<?php

namespace App\Http\Controllers;

use App\Models\Opstina;
use Illuminate\Http\Request;

class OpstinaController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new Opstina();
        $this->routeName="opstina";
        $this->parameterName="opstina";
        $this->data["header"]="Opstina";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
