<?php


namespace App\Models;


class User
{
    protected $tableName="users";

    public function getOne($id){
        return \DB::table($this->tableName)->where("id",$id)->first();
    }


    public function createNew($email, $pass){
        \DB::table($this->tableName)->insert([
            "username"=>"hardcodovano",
            "password"=>$pass,
            "mail"=>$email
        ]);
    }

    public function login($email, $pass){
        return \DB::table($this->tableName)->where([
            ['mail', '=', $email],
            ['password', '=', $pass],
        ])->first();
    }
}
