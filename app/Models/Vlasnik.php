<?php


namespace App\Models;


class Vlasnik
{

    protected $tableName="vlasnik";

    public function getOne($id)
    {
        return \DB::table($this->tableName)->where("id", $id)->first();
    }

    public function getAll()
    {
        return \DB::table($this->tableName)->get();
    }

    public function createNew($ime, $prezime, $telefon, $dodatno)
    {

        \DB::table($this->tableName)->insert([
            "Ime" => $ime,
            "prezime" => $prezime,
            "brTelefona" => $telefon,
            "ostalo" => $dodatno
        ]);
    }

    public function change($id, $ime, $prezime, $telefon, $dodatno)
    {
        \DB::table($this->tableName)->where('id', $id)
            ->update([
                "Ime" => $ime,
                "prezime" => $prezime,
                "brTelefona" => $telefon,
                "ostalo" => $dodatno
            ]);
    }

    public function deleteItem($id)
    {

        \DB::table($this->tableName)->where("id", $id)->delete();

    }

}





