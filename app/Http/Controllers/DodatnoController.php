<?php

namespace App\Http\Controllers;

use App\Models\Dodatno;
use Illuminate\Http\Request;

class DodatnoController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new Dodatno();
        $this->routeName="dodatno";
        $this->parameterName="dodatno";
        $this->data["header"]="Dodatno";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
