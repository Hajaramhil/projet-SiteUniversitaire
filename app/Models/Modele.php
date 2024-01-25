<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Modele extends Model {

    public function DashBordResponsable($email, $password)
    {
        
            // Vérification en tant que professeur
            $profData = DB::select("SELECT * FROM Prof WHERE Email = ? AND Password = ?", [$email, $password]);
    
            if ($profData) {
                // L'utilisateur est un professeur
                $listeEtudiants = DB::select("SELECT * FROM etudiant");
                $listeProfs = DB::select("SELECT * FROM Prof");
                $statistiques = DB::select("SELECT * FROM statistique");
                $note = DB::select("SELECT * FROM note");
    
                // Retourner la liste de tous les étudiants, des professeurs et des statistiques
                return [
                     
                    'ListeEtudiants' => $listeEtudiants,
                    'ListeProfs' => $listeProfs,
                    'Statistiques' => $statistiques,
                    "Notes" => $note
                ];
            } else {
                // Aucun utilisateur trouvé avec l'email et le mot de passe fournis
                return [];
            }
        }
        public function DashBordProf($email, $password)
        {
            
                // Vérification en tant que professeur
                $profData = DB::select("SELECT * FROM Prof WHERE Email = ? AND Password = ?", [$email, $password]);
        
                if ($profData) {
                    // L'utilisateur est un professeur
                    $listeEtudiants = DB::select("SELECT * FROM etudiant");
                    $listeProfs = DB::select("SELECT * FROM Prof");
                    $statistiques = DB::select("SELECT * FROM statistique");
                    $note = DB::select("SELECT * FROM note");
        
                    // Retourner la liste de tous les étudiants, des professeurs et des statistiques
                    return [
                         
                        'ListeEtudiants' => $listeEtudiants,
                        'ListeProfs' => $listeProfs,
                        'Statistiques' => $statistiques,
                        "Notes" => $note
                    ];
                } else {
                    // Aucun utilisateur trouvé avec l'email et le mot de passe fournis
                    return [];
                }


            }

            
           
        
    public function D(){
        $listeEtudiants = DB::select("SELECT * FROM etudiant");
        $listeProfs = DB::select("SELECT * FROM Prof");
        $statistiques = DB::select("SELECT * FROM statistique");
        $note = DB::select("SELECT * FROM note");

        // Retourner la liste de tous les étudiants, des professeurs et des statistiques
        return [
             
             
            'ListeEtudiants' => $listeEtudiants,
            'ListeProfs' => $listeProfs,
            'Statistiques' => $statistiques,
            "Notes" => $note
        ];
    }
    public function DashBordLogin($email,$password){
        // Vérification en tant que professeur
    $profData = DB::select("SELECT * FROM Prof WHERE Email = ? AND Password = ?", [$email, $password]);
    $user = "prof";
    if (!$profData) {
        // L'utilisateur est un professeur
        $resp = DB::select("SELECT * FROM responsable WHERE Email = ? AND Password = ?", [$email, $password]);
        $user = "resp";
        if(!$resp){
            $etu = DB::select("SELECT * FROM etudiant WHERE Email = ? AND Password = ?", [$email, $password]);
            $user = "etu";
            if(!$etu){
                return[];
            }
        }
    }  
        // Aucun utilisateur trouvé avec l'email et le mot de passe fournis
        
        $listeEtudiants = DB::select("SELECT * FROM etudiant");
        $listeProfs = DB::select("SELECT * FROM Prof");
        $statistiques = DB::select("SELECT * FROM statistique");
        $note = DB::select("SELECT * FROM note");

        // Retourner la liste de tous les étudiants, des professeurs et des statistiques
        return [
            "user"=> $user,
             
            'ListeEtudiants' => $listeEtudiants,
            'ListeProfs' => $listeProfs,
            'Statistiques' => $statistiques,
            "Notes" => $note
        ];

}
}
