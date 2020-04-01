<?php

namespace App\Http\Controllers;

use App\Models\TipUsluge;
use Illuminate\Http\Request;

class TipUslugeController extends BasicAdminController
{
   public function __construct()
   {
      $this->tmpObject=new TipUsluge();
      $this->routeName="tip_usluge";
      $this->parameterName="tip_usluge";
       $this->data["header"]="Tip usluge";
      $this->data["routeName"]=$this->routeName;
      $this->data["parameterName"]=$this->parameterName;
   }


}
