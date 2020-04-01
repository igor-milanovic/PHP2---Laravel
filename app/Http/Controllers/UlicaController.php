<?php

namespace App\Http\Controllers;

use App\Http\Requests\UlicaRequest;
use App\Models\Opstina;
use App\Models\Ulica;
use App\Models\UlicaOpstina;
use Illuminate\Http\Request;

class UlicaController extends Controller
{

    protected $routeName;
    protected $parameterName;
    protected $data;
    protected $tmpObject;
    protected $viewFolder="ulica";

    public function __construct()
    {
        $opstina=new Opstina();
        $this->tmpObject=new Ulica();
        $this->routeName="ulica";
        $this->parameterName="ulica";
        $this->data["header"]="Ulica";
        $this->data["routeName"]=$this->routeName;
        $this->data["parameterName"]=$this->parameterName;
        $this->data["ddlOpstina"]=$opstina->getAll();
        $this->viewFolder="ulica";
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
    public function store(UlicaRequest $request)
    {
        $opstinaID= $request->get("opstina");
        $ulica= $request->get("naziv");
        $this->tmpObject->createNew($ulica,$opstinaID);
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

    public function update(UlicaRequest $request, $id)
    {
        $opstinaID= $request->get("opstina");
        $ulica= $request->get("naziv");

        $this->tmpObject->change($id, $ulica, $opstinaID);
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
