<?php

namespace App\Http\Controllers;

use App\Models\BrojSoba;
use App\Models\Dodatno;
use App\Models\Grejanje;
use App\Models\Opstina;
use App\Models\Ostalo;
use App\Models\Sprat;
use App\Models\Stan;
use App\Models\StanjeObjekta;
use App\Models\TipNekretnine;
use App\Models\TipObjekta;
use App\Models\TipUsluge;
use App\Models\Ulica;
use App\Models\Vlasnik;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    protected $data;
    protected $tmpObject;
    protected $viewFolder="front.pages";

    public function __construct()
    {

        $this->tmpObject=new Stan();
        $this->routeName="ponuda";
        $this->parameterName="ponuda";
        $this->data["header"]="Ponuda";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;


    }








    public function index(){
        $this->tmpObject=new Stan();
        $this->data["data"]=$this->tmpObject->getAll();
        return view("$this->viewFolder.index", $this->data);
    }

    public function show($id){
        $ostalo=new Ostalo();
        $dodatno=new Dodatno();
        $this->tmpObject=new Stan();
        $this->data["ostalo"]=$ostalo->getAll();
        $this->data["dodatno"]=$dodatno->getAll();
        $this->data["data"]=$this->tmpObject->getOne($id);
        return view("$this->viewFolder.nekretnina", $this->data);
    }

    public function ponuda(){
        $this->tmpObject=new Stan();
        $this->routeName="ponuda";
        $this->parameterName="ponuda";
        $this->data["header"]="Ponuda";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
        $tip_usluge=new TipUsluge();
        $this->data["tip_usluge"]=$tip_usluge->getAll();
        $tip_nekretnine=new TipNekretnine();
        $this->data["tip_nekretnine"]=$tip_nekretnine->getAll();
        $this->data["data"]=$this->tmpObject->getAll();

        return view("$this->viewFolder.ponuda", $this->data);
    }
}
