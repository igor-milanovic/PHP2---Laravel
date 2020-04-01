<?php


namespace App\Models;


class TipUsluge extends BasicModel
{

    public function __construct()
    {
        $routeName="tip_usluge";
        $parName="tip_usluge";
        $this->tableName="tip_usluge";
        $this->parameterName=$routeName;
        $this->data["routeName"]=$routeName;
        $this->data["parameterName"]=$parName;
    }

}
