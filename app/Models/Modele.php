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
        $classe = DB::select("SELECT * FROM classe");
        $annonce = DB::select("SELECT * FROM annonce ORDER BY id DESC ");
        $demande = DB::select("SELECT * FROM demande  ORDER BY id DESC ");  

        // Retourner la liste de tous les étudiants, des professeurs et des statistiques
        return [
             
             
            'ListeEtudiants' => $listeEtudiants,
            'ListeProfs' => $listeProfs,
            'Statistiques' => $statistiques,
            "Notes" => $note,
            "classe" => $classe,
            "annonce" => $annonce,
            "demande" => $demande 
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

public function AjoutEtudiant($code, $nom, $password, $email, $programme, $suppression,$genre){
    
        // Ajout de l'étudiant
        DB::table('Etudiant')->insert([
            'ID' => $code,
            'Nom' => $nom,
            'Programme' => $programme,
            'Email' => $email,
            'Password' => $password,
            'Genre' => $genre  
        ]);
    
}
public function supressionEtudiant($code){
    
    DB::table('note')->where('Etudiant_ID', $code)->delete();

    DB::table('Etudiant')->where('ID', $code)->delete();

}
public function AjoutProf($code, $nom, $password, $email, $programme, $suppression){
    DB::table('Prof')->insert([
        'ID' => $code,
        'Nom' => $nom,
        'Programme' => $programme,
        'Email' => $email,
        'Password' => $password,
         
    ]);

}
public function supressionProf($code){
    DB::table('Prof')->where('ID', $code)->delete();
}
public function SupressionClasse($code){
    DB::table('Classe')->where('ID', $code)->delete();
}
public function AjoutClasse($nom,$capacite){
    // Insérer les données dans la base de données
 return  DB::table('classe')->insert([
    'name' => $nom,
    'capacity' => $capacite
]);

}
public function SupressionAnnonce($code){
    DB::table('Annonce')->where('ID', $code)->delete();
}
public function AjoutAnnonce($titre,$contenu){
    // Insérer les données dans la base de données
 return  DB::table('Annonce')->insert([
    'titre' => $titre,
    'contenu' => $contenu
]);

}
public function SupressionDemande($code){
    DB::table('demande')->where('ID', $code)->delete();
}
public function AjoutDemande($titre,$contenu){
    // Insérer les données dans la base de données
 return  DB::table('demande')->insert([
    'nom' => $titre,
    'contenu' => $contenu
]);

}




}
