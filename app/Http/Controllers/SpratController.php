<?php

namespace App\Http\Controllers;

use App\Models\Sprat;
use Illuminate\Http\Request;

class SpratController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new Sprat();
        $this->routeName="sprat";
        $this->parameterName="sprat";
        $this->data["header"]="Sprat";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
