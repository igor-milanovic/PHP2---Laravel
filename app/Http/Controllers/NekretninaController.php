<?php

namespace App\Http\Controllers;

use App\Http\Requests\NekretninaRequest;
use App\Http\Requests\NekretninaUpdateRequest;
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

class NekretninaController extends Controller
{

    protected $routeName;
    protected $parameterName;
    protected $data;
    protected $tmpObject;
    protected $viewFolder="basic";

    public function __construct()
    {
        $this->tmpObject=new Stan();
        $this->routeName="nekretnina";
        $this->parameterName="nekretnina";
        $this->data["header"]="Nekretnina";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
        $this->viewFolder="nekretnina";



        $brojSoba=new BrojSoba();
        $this->data["brSoba"]=$brojSoba->getAll();

        $dodatno=new Dodatno();
        $this->data["dodatno"]=$dodatno->getAll();

        $grejanje= new Grejanje();
        $this->data["grejanje"]=$grejanje->getAll();

        $opstina= new Opstina();
        $this->data["opstina"]=$opstina->getAll();

        $ostalo= new Ostalo();
        $this->data["ostalo"]=$ostalo->getAll();

        $sprat= new Sprat();
        $this->data["sprat"]=$sprat->getAll();

        $stanje= new StanjeObjekta();
        $this->data["stanje"]=$stanje->getAll();

        $tipNekretnine=new TipNekretnine();
        $this->data["tip_nekretnine"]=$tipNekretnine->getAll();

        $tipObjekta=new TipObjekta();
        $this->data["tip_objekta"]=$tipObjekta->getAll();

        $tipUsluge=new TipUsluge();
        $this->data["tip_usluge"]=$tipUsluge->getAll();

        $ulica= new Ulica();
        $this->data["ulica"]=$ulica->getAll();

        $vlasnik= new Vlasnik();
        $this->data["vlasnik"]=$vlasnik->getAll();


    }





    public function index()
    {
        $this->data["data"]=$this->tmpObject->getAll();
        return view("admin.$this->viewFolder.index", $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.$this->viewFolder.create", $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NekretninaRequest $request)
    {
        $nekretnina = new Stan();
        $nekretnina->brojSoba=$request->get("brSoba");
        $nekretnina->dodatno=$request->get("dodatno");
        $nekretnina->grejanje=$request->get("grejanje");
        $nekretnina->opstina=$request->get("opstina");
        $nekretnina->ostalo=$request->get("ostalo");
        $nekretnina->prikaz=$request->get("prikaz");
        $nekretnina->sprat=$request->get("sprat");
        $nekretnina->stanje=$request->get("stanje");
        $nekretnina->tipNekretnine=$request->get("tip_nekretnine");
        $nekretnina->tipObjekta=$request->get("tip_objekta");
        $nekretnina->tipUsluge=$request->get("tip_usluge");
        $nekretnina->ulica=$request->get("ulica");
        $nekretnina->vlasnik=$request->get("vlasnik");

        $nekretnina->ukupnaSpratnost=$request->get("spratnost")??"/";
        $nekretnina->cena=$request->get("cena")??"/";
        $nekretnina->kvadrati=$request->get("kvadratura")??"0";
        $nekretnina->naslov=$request->get("naslov") ?? "naslov";
        $nekretnina->opis=$request->get("opis");
        $nekretnina->broj=$request->get("broj") ?? "bb";
        $slika=$request->file("slika");
        $nazivSlike=$slika->getClientOriginalName();
        $newFileName=time()."_".$nazivSlike;
        try{
            $slika->move(public_path("images\\"),$newFileName);
            $nekretnina->slika=$newFileName;
            $nekretnina->createNew();
            return redirect()->route("$this->routeName.index");
        }catch(\Exception $e){

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //nema potrebe da se prikazuje jedan tip
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data["data"]=$this->tmpObject->getOne($id);
        return view("admin.$this->viewFolder.edit",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(NekretninaUpdateRequest $request, $id)
    {
        $nekretnina = new Stan();
        $nekretnina->brojSoba=$request->get("brSoba");
        $nekretnina->dodatno=$request->get("dodatno");
        $nekretnina->grejanje=$request->get("grejanje");
        $nekretnina->opstina=$request->get("opstina");
        $nekretnina->ostalo=$request->get("ostalo");
        $nekretnina->prikaz=$request->get("prikaz");
        $nekretnina->sprat=$request->get("sprat");
        $nekretnina->stanje=$request->get("stanje");
        $nekretnina->tipNekretnine=$request->get("tip_nekretnine");

        $nekretnina->tipObjekta=$request->get("tip_objekta");
        $nekretnina->tipUsluge=$request->get("tip_usluge");
        $nekretnina->ulica=$request->get("ulica");
        $nekretnina->vlasnik=$request->get("vlasnik");

        $nekretnina->ukupnaSpratnost=$request->get("spratnost")??"/";
        $nekretnina->cena=$request->get("cena")??"/";
        $nekretnina->kvadrati=$request->get("kvadratura")??"0";
        $nekretnina->naslov=$request->get("naslov") ?? "naslov";
        $nekretnina->opis=$request->get("opis");
        $nekretnina->broj=$request->get("broj") ?? "bb";

        $slika=$request->file("slika");

        try{
            if($slika!= null){
                $nazivSlike=$slika->getClientOriginalName();
                $newFileName=time()."_".$nazivSlike;

                $slika->move(public_path("images\\"),$newFileName);
                $nekretnina->slika=$newFileName;
                $nekretnina->updateWithPicture($id);
            }else{
                $nekretnina->change($id);
            }



            return redirect()->route("$this->routeName.index");
        }catch(\Exception $e){

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->tmpObject->deleteItem($id);
        }catch(\Throwable $e){

        }

    }
}
