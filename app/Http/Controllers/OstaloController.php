<?php

namespace App\Http\Controllers;

use App\Models\Ostalo;
use Illuminate\Http\Request;

class OstaloController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new Ostalo();
        $this->routeName="ostalo";
        $this->parameterName="ostalo";
        $this->data["header"]="Ostalo";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
