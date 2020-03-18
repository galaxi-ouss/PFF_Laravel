<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formateur;

class formateurController extends Controller
{
    function add(Request $request){
        
        $nom = $request->input('nomF');
        $prenom = $request->input('prenomF');
        $dateN = $request->input('dateN');
        $tel = $request->input('tel');
        $reb = $request->input('reb');

        $formateur = new Formateur();
        $formateur->nom =$nom; 
        $formateur->prenom =$prenom; 
        $formateur->dateN =$dateN; 
        $formateur->tel =$tel; 
        $formateur->reb =$reb; 

        $formateur->save();

        return $formateur;
    }
}
