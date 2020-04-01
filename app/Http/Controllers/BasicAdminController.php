<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;
use App\Models\TipObjekta;
use Illuminate\Http\Request;

abstract class BasicAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $routeName;
    protected $parameterName;
    protected $data;
    protected $tmpObject;
    protected $viewFolder="basic";
/*
    public function __construct( $parName, $routeName)
    {
        //$this->tmpObject=new TipObjekta();
        $this->parameterName=$routeName;
        $this->data["routeName"]=$routeName;
        $this->data["parameterName"]=$parName;
    }
*/
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
    public function store(BasicRequest $request)
    {
        $naziv= $request->get("naziv");
        $this->tmpObject->createNew($naziv);
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
    public function update(BasicRequest $request, $id)
    {
        $naziv=$request->get("naziv");
        $this->tmpObject->change($id, $naziv);
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
        redirect()->route("$this->routeName.index")->with("success","Uspesno ste obrisali!");
    }
}
