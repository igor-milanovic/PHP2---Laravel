<?php

namespace App\Http\Controllers;

use App\Models\Grejanje;
use Illuminate\Http\Request;

class GrejanjeController extends BasicAdminController
{
    public function __construct()
    {
        $this->tmpObject=new Grejanje();
        $this->routeName="grejanje";
        $this->parameterName="grejanje";
        $this->data["header"]="Tip grejanja";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
    }


}
