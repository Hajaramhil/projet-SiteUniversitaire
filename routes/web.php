<?php

use App\Http\Controllers\Controller;
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


Route::get("login", function(){
    return view("login");
})->name("login");

Route::get("accueil", function(){
    return view("accueil");
})->name("k");

Route::get("/", function(){
    return view("accueil");
})->name("acceil");
Route::post("D", [Controller::class,"D"])->name("D");
Route::post("DashBordLogin",[Controller::class , "DashBordLogin"])->name("DashBordLogin");

Route::get("DashBordProf", [Controller::class, "DashBordProf"])->name("DashBordProf");

Route::get("DashBordEtudiant", [Controller::class, "DashBord"])->name("DashBordEtudiant");


//Route::get("/", [Controller::class, "DashBord"])->name("DashBordEtudiant");

Route::get("DepMaths",function(){
    return view("DepMaths");
})->name("DepMaths");

Route::get("DepInfo", function (){
    return view("DepInfo");
})->name("DepInfo");

Route::get("IDAI", function (){
    return view("IDAI");
})->name("IDAI");


Route::get("AD", function (){
    return view("AD");
})->name("AD");

Route::get("MID", function (){
    return view("MID");
})->name("MID");

Route::get("SSD", function (){
    return view("SSD");
})->name("SSD");
Route::get("MA", function (){
    return view("MA");
})->name("MA");




Route::get("DashBordEtudiant", [Controller::class, "DashBord"])->name("DashBordEtudiant");

Route::get("DEEtudiant", [Controller::class, "DEEtudiant"])->name("DEEtudiant");
Route::get("DEDemande", [Controller::class, "DEDemande"])->name("DEDemande");

Route::get("DEAnonce",[Controller::class,"DEAnonce"])->name("DEAnonce");
 







Route::get("DPDemande", [Controller::class,"DPDemande"])->name("DPDemande");
Route::get("DPAnonce", [Controller::class,"DPAnonce"])->name("DPAnonce");

Route::get("DPEtudiant", [Controller::class,"DPEtudiant"])->name("DPEtudiant");
Route::get("DPDemande", [Controller::class,"DPDemande1"])->name("DPDemande");


 
 


Route::post('DashBordResponsable', [Controller::class,"DashBordResponsable"]
)->name("DashBordResponsable");
Route::get('DashBordResponsable', [Controller::class,"DashBordResponsable"]
)->name("DashBordResponsable");


Route::get('login', function () {
    return view('Login');
})->name("login");

Route::post('DashBord', [Controller::class, 'DashBord'])->name('DashBord');
Route::get('DREtudiant', [Controller::class, 'DREtudiant'])->name('DREtudiant');

Route::get('DRProf', [Controller::class, 'DRProf'])->name('DRProf');
Route::get('DRSalle', [Controller::class, 'DRSalle'])->name('DRSalle');

Route::get('DRAnonce', [Controller::class, 'DRAnonce'])->name('DRAnonce');
