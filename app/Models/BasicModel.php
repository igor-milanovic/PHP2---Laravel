<?php


namespace App\Models;


abstract class BasicModel
{
    protected $tableName;

    public function getOne($id){
        return \DB::table($this->tableName)->where("id",$id)->first();
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

        \DB::table($this->tableName)->where("id",$id)->delete();
    }

}
