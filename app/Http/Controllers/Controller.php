<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Modele;
use Illuminate\Support\Facades\Hash;
class Controller extends BaseController
{
 
    public function DREtudiant(){
      $Modele = new Modele();
  
      $Modele = $Modele->D();
        return view("DREtudiant", [ "Data" => $Modele  ]);

      
    }
    public function DRProf (){
      $Modele = new Modele();
  
      $Modele = $Modele->D();
        return view("DRProf", [ "Data" => $Modele  ]);

       
    }
    public function DRSalle(){
      $Modele = new Modele();
  
      $Modele = $Modele->D();
        return view("DRSalle", [ "Data" => $Modele  ]);

      
    }
    
    public function DRAnonce(){
      $Modele = new Modele();
  
      $Modele = $Modele->D();
        return view("DRAnonce", [ "Data" => $Modele  ]);

      
    }
    

    public function  DashBordResponsable(){
      $Modele = new Modele();
  
         $Modele = $Modele->D();
        return view("DashBordResponsable", [ "Data" => $Modele  ]);

      
    }


    public function  DashBordProf(){
      $Modele = new Modele();
  
      $Modele = $Modele->D();
        return view("DashBordProf", [ "Data" => $Modele  ]);

      
    }


    public function DashBord(Request $request){
      $Modele = new Modele();
  
  $Modele = $Modele->D();
      return view("DashBordEtudiant", [ "Data" => $Modele  ]);
  }


  public function DEAnonce(Request $request){
    $Modele = new Modele();
  
  $Modele = $Modele->D();

  if(empty($Modele)){
    return view("login");
  }
    return view("DEAnnonce", [ "Data" => $Modele  ]);
}
public function DEDemande(Request $request){
  $Modele = new Modele();
  
  $Modele = $Modele->D();
  return view("DEDemande", [ "Data" => $Modele  ]);
}
public function DEEtudiant(Request $request){
  $Modele = new Modele();
  
  $Modele = $Modele->D();

 
  return view("DEEtudiant", [ "Data" => $Modele  ]);
}

public function DashBordLogin(Request $request){
  $email = $request->input('email');
  $password = $request->input('password');
  $Modele = new Modele();
  $Modele = $Modele->DashBordLogin($email,$password);
  if(empty($Modele)){
    return view("accueil");
  }
  if($Modele["user"] == "etu"){
    return view("DashBordEtudiant", [ "Data" => $Modele  ]);

  }elseif($Modele["user"] == "prof"){
    return view("DashBordProf", [ "Data" => $Modele  ]);

  }elseif ($Modele["user"] == "resp"){
    return view("DashBordResponsable", [ "Data" => $Modele  ]);


  }
  return view("login");
 
  
}
  
  
public function D (){
  $Modele = new Modele();
  $Modele = $Modele->D();
  return view("DashBordResponsable",[ "Data" =>$Modele]);
}
public function DPDemande(){
  $Modele = new Modele();
  $Modele = $Modele->D();
  return view("DPDemande",[ "Data" =>$Modele]);
}
public function DPEtudiant(){
  $Modele = new Modele();
  $Modele = $Modele->D();
  return view("DPEtudiant",[ "Data" =>$Modele]);
}

public function DPDemande1(){
  $Modele = new Modele();
  $Modele = $Modele->D();
  return view("DPDemande",[ "Data" =>$Modele]);
}
public function DPAnonce(){
  $Modele = new Modele();
  $Modele = $Modele->D();
  return view("DPAnonce",[ "Data" =>$Modele]);
}
public function AjoutEtudiant(Request $request){
  $code = $request->input('code');
  $nom = $request->input('nom');
  $password = $request->input('password');
  $email = $request->input('email');
  $programme = $request->input('Programme');
  $genre = $request->input('Genre') ? true : false;
  $suppression = $request->input('suppression') ? true : false; // Convertir en booléen

  // Appel de la méthode AjoutEtudiant du modèle avec les données reçues
  $modele = new Modele();
   if(!$suppression){
    $modele->AjoutEtudiant($code, $nom, $password, $email, $programme, $suppression,$genre);

   }else{
    $modele->supressionEtudiant($code);

   }
  

     $Modele =  $modele->D();
        return view("DREtudiant", [ "Data" => $Modele  ]);
}
public function AjoutProf(Request $request){
  $code = $request->input('code');
  $nom = $request->input('nom');
  $password = Hash::make($request->input('password'));
  $email = $request->input('email');
  $programme = $request->input('Programme');
  $suppression = $request->input('suppression') ? true : false; // Convertir en booléen

  // Appel de la méthode AjoutEtudiant du modèle avec les données reçues
  $modele = new Modele();
   if(!$suppression){
    $modele->AjoutProf($code, $nom, $password, $email, $programme, $suppression);

   }else{
    $modele->supressionProf($code);

   }
   $Modele = $modele->D();
   return view("DRProf", [ "Data" => $Modele  ]);
}
public function SupressionClasse(Request $request){
  $id = $request->input('ID');
  $Modele= new Modele();
  $Modele->SupressionClasse($id);
  $Modele = $Modele->D();
  return view("DRSalle", [ "Data" => $Modele  ]);
}
public function AjoutClasse(Request $request){
  // Récupérer les données du formulaire
  $nom = $request->input('nom');
  $capacite = $request->input('capacite');

  $Modele= new Modele();
   $Modele->AjoutClasse($nom,$capacite);
  $Modele = $Modele->D();
  return view("DRSalle", [ "Data" => $Modele,  ]);

   
}

public function SupressionAnnonce(Request $request){
  $id = $request->input('ID');
  $Modele= new Modele();
  $Modele->SupressionAnnonce($id);
  $Modele = $Modele->D();
  return view("DRAnonce", [ "Data" => $Modele  ]);
}
public function AjoutAnnonce(Request $request){
  // Récupérer les données du formulaire
  $nom = $request->input('nom');
  $capacite = $request->input('capacite');

  $Modele= new Modele();
   $Modele->AjoutAnnonce($nom,$capacite);
  $Modele = $Modele->D();
  return view("DRAnonce", [ "Data" => $Modele,  ]);

   
}

public function SupressionDemande(Request $request){
  $id = $request->input('ID');
  $Modele= new Modele();
  $Modele->SupressionDemande($id);
  $Modele = $Modele->D();
  return view("DPDemande", [ "Data" => $Modele  ]);
}
public function AjoutDemande(Request $request){
  // Récupérer les données du formulaire
  $nom = $request->input('nom');
  $capacite = $request->input('capacite');

  $Modele= new Modele();
   $Modele->AjoutDemande($nom,$capacite);
  $Modele = $Modele->D();
  return view("DPDemande", [ "Data" => $Modele,  ]);

   
}
public function AjoutDemandeE(Request $request){
  // Récupérer les données du formulaire
  $nom = $request->input('nom');
  $capacite = $request->input('capacite');

  $Modele= new Modele();
   $Modele->AjoutDemande($nom,$capacite);
  $Modele = $Modele->D();
  return view("DEDemande", [ "Data" => $Modele,  ]);

   
}


    
}
