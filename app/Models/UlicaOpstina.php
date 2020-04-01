<?php


namespace App\Models;


class UlicaOpstina
{
    protected $data;
    protected $ulica;
    protected $opstina;
    public function __construct()
    {
        $this->ulica=new Ulica();
        $this->opstina=new Opstina();
    }

    public function getOne($id){
        $ulica=$this->ulica->getOne($id);
        $opstinaID=$ulica->opstinaID;
        $ulicaNaziv=$ulica->naziv;
        $opstinaNaziv=$this->opstina->getOne($opstinaID)->naziv;
        $this->data["id"]=$id;
        $this->data["opstina"]=$opstinaNaziv;
        $this->data["naziv"]=$ulicaNaziv;
        return $this->data;
    }

    public function getAll(){
        return \DB::table($this->tableName)->get();
    }

    public function createNew($vrednost){
        \DB::table($this->tableName)->insert(["naziv"=>$vrednost]);
    }

    public function change($id, $newValue){
        \DB::table($this->tableName)->where('id', $id)
            ->update(['naziv' => $newValue]);
    }


    public function deleteItem($id){
        dd($id);
        \DB::table($this->tableName)->where("id",$id)->delete();
    }

}
