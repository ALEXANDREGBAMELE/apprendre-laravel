<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Méthode pour afficher le formulaire
    public function afficherFormulaire()
    {
        return view('monformulaire');
    }

    // Méthode pour traiter les données du formulaire
    public function traiterFormulaire(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|max:255',
        ]);

        // Si la validation réussit, continuez ici
        // Par exemple, enregistrez les données dans la base de données

        // Redirigez l'utilisateur vers une autre page
        return redirect('/bonjour');
    }
}
