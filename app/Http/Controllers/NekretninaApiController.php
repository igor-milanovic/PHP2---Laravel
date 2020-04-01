<?php

namespace App\Http\Controllers;

use App\Models\Stan;
use Illuminate\Http\Request;

class NekretninaApiController extends Controller
{
    private $stan;

    public function __construct()
    {
        $this->stan=new Stan();
    }

    public function pretraga($lokacija="false", $tip_usluge="false", $tip_nekretnine="false"){

       if($lokacija && $tip_nekretnine && $tip_usluge){
           return $this->stan->filterSve($lokacija, $tip_nekretnine, $tip_usluge);

       }else if($lokacija && $tip_nekretnine){
           return $this->stan->filterLokacijaNekretnina($lokacija, $tip_nekretnine);

       }else if ($lokacija && $tip_usluge){
           return $this->stan->filterLokacijaUsluga($lokacija, $tip_usluge);

       }else if($tip_usluge && $tip_nekretnine) {
           return $this->stan->filterUslugaNekretnina($tip_nekretnine, $tip_usluge);

       }else if($lokacija){
           return $this->stan->filterLokacija($lokacija);

       }else if($tip_usluge){
           return $this->stan->filterUsluga($tip_usluge);

       }else if($tip_nekretnine){
           return $this->stan->filterNekretnina($tip_nekretnine);

       }else{
           return ["lokacija"=>$lokacija, "usluga"=>$tip_usluge, "nekretnina"=>$tip_nekretnine, "nema nista"=>"nista"];
           //nista nije obelezeno
       }





    }

    public function ponudi($lokacija){

        return $this->stan->filterLokacijaText($lokacija);
    }


}
