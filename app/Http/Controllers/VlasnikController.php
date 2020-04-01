<?php

namespace App\Http\Controllers;


use App\Http\Requests\VlasnikRequest;
use App\Models\Vlasnik;
use Illuminate\Http\Request;

class VlasnikController extends Controller
{

    protected $routeName;
    protected $parameterName;
    protected $data;
    protected $tmpObject;
    protected $viewFolder="basic";

    public function __construct()
    {
        $this->tmpObject=new Vlasnik();
        $this->routeName="vlasnik";
        $this->parameterName="vlasnik";
        $this->data["header"]="Vlasnik";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
        $this->viewFolder="vlasnik";
    }





    public function index()
    {
        $this->data["tipovi"]=$this->tmpObject->getAll();
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
    public function store(VlasnikRequest $request)
    {
        $ime= $request->get("ime");
        $prezime= $request->get("prezime");
        $telefon= $request->get("telefon");
        $dodatno= $request->get("dodatno");
        $this->tmpObject->createNew($ime, $prezime, $telefon, $dodatno);
        return redirect()->route("$this->routeName.index");
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
        $this->data["el"]=$this->tmpObject->getOne($id);
        return view("admin.$this->viewFolder.edit",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(VlasnikRequest $request, $id)
    {
        $ime= $request->get("ime");
        $prezime= $request->get("prezime");
        $telefon= $request->get("telefon");
        $dodatno= $request->get("dodatno");

        $this->tmpObject->change($id, $ime, $prezime, $telefon, $dodatno);
        //  session()->push("uspeh","Uspesno ste odradili akciju!");
        return redirect()->route("$this->routeName.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tmpObject->deleteItem($id);
    }
}
