<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\Technicien;
use Illuminate\Http\Request;

class TechnicienController extends Controller
{
    // Afficher la liste des techniciens
    public function liste()
    {
        $techniciens = Technicien::all();
        return view('liste_technicien', compact('techniciens'));
    }

    // Afficher le formulaire d'ajout d'un technicien
    public function form()
    {
        return view('form_technicien');
    }

    // Enregistrer un technicien dans la base
    public function enregistrer(Request $request)
    {
        Technicien::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'specialite' => $request->specialite,
        ]);

        return redirect()->route('liste_technicien');
    }

    // Modifier un technicien (affiche le formulaire avec les infos)
    public function modifier($id)
    {
        $technicien = Technicien::find($id);
        return view('form_technicien', compact('technicien'));
    }

    // Supprimer un technicien
    public function supprimer($id)
    {
        $technicien = Technicien::find($id);
        $technicien->delete();

        return redirect()->route('liste_technicien');
    }

}
