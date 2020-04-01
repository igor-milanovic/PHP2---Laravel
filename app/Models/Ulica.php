<?php


namespace App\Models;


class Ulica
{
    protected $tableName="ulica";
    public function getOne($id){
        return \DB::table($this->tableName)->where("id",$id)->first();
    }

    public function getAll(){
        return \DB::table($this->tableName)
            ->join('opstina', 'ulica.opstinaid', '=', 'opstina.id')
            ->select("ulica.id","opstina.naziv as opstina","ulica.naziv")
            ->get();
    }

    public function createNew($naziv, $opstina){
        \DB::table($this->tableName)->insert([
            "naziv"=>$naziv,
            "opstinaid"=>$opstina
        ]);
    }

    public function change($id, $naziv, $opstina){
        \DB::table($this->tableName)->where('id', $id)
            ->update([
                "naziv"=>$naziv,
                "opstinaid"=>$opstina
            ]);
    }


    public function deleteItem($id){

        \DB::table($this->tableName)->where("id",$id)->delete();
    }

}
