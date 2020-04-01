<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index')->name("home");

Route::get('/nekretnina/{id}',"FrontendController@show")->name("prikaz");

Route::get("/ponuda","FrontendController@ponuda")->name("ponuda");

Route::get("/kontakt",function(){
    return view("front.pages.kontakt");
})->name("kontakt");

//Route::post("/kontakt","ContactController@send")->name("sendMail");

Route::post("/api/nekretnine/{lokacija}/{tip_usluge}/{tip_nekretnine}", "NekretninaApiController@pretraga");
Route::post("/api/nekretnine/{lokacija}", "NekretninaApiController@ponudi");


//registracija i logovanje

Route::get("/register", "LoginController@registerForm")->name("registerForm");;
Route::post("/register", "LoginController@registerUser")->name("registerUser");

Route::get("/login", "LoginController@loginForm")->name("loginForm");
Route::post("/login", "LoginController@loginUser")->name("loginUser");

Route::get("/logOut", "LoginController@logOut")->name("logOut");





Route::middleware('admin')->group(function () {

//ADMIN

    Route::resource('tip_nekretnine', 'TipNekretnineController');

    Route::resource('tip_objekta', 'TipObjektaController');

    Route::resource('tip_usluge', 'TipUslugeController');

    Route::resource('brojSoba', 'BrojSobaController');

    Route::resource('sprat', 'SpratController');

    Route::resource('opstina', 'OpstinaController');

    Route::resource('stanje_objekta', 'StanjeObjektaController');

    Route::resource('grejanje', 'GrejanjeController');

    Route::resource('ostalo', 'OstaloController');

    Route::resource('dodatno', 'DodatnoController');

    Route::resource('vlasnik', 'VlasnikController');

    Route::resource('ulica', 'UlicaController');

    Route::resource('admin/nekretnina', 'NekretninaController');

// za admin panel?

    Route::get("admin", "AdminController@index")->name("admin");
});
