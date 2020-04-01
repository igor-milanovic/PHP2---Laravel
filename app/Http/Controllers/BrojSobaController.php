<?php

namespace App\Http\Controllers;

use App\Models\BrojSoba;
use Illuminate\Http\Request;

class BrojSobaController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new BrojSoba();
        $this->routeName="brojSoba";
        $this->parameterName="brojSoba";
        $this->data["header"]="Broj soba";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
