<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    protected $data;
    protected $tmpObject;
    protected $viewFolder="front.pages";


    public function registerForm(){
        return view("$this->viewFolder.register");
    }

    public function loginForm(){

        return view("$this->viewFolder.login");
    }

    public function registerUser(LoginRequest $request){
        $mail=$request->get("mail");
        $pass=md5($request->get("pass"));
//        dd($pass);
        $user=new User();
        $user->createNew($mail, $pass);
        return redirect()->route("home");
    }

    public function loginUser(Request $request){
        $mail=$request->get("mail");
        $pass=md5($request->get("pass"));
////        dd($pass);
        $user=new User();
        $u=$user->login($mail, $pass);
        if($u == null){
            //upisi u log
            return redirect()->back()->with("error","Podaci nisu dobri");
        }else{
            session()->push("user", $u);
            return redirect()->route("home");
        }
    }

    public function logOut(){
        session()->forget("user");
        return redirect()->route("home");
    }
}
