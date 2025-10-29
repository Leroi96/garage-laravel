<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\Reparation;
use App\Models\Technicien;
use Illuminate\Http\Request;

class ReparationController extends Controller
{
    public function liste()
    {
        $reparations = Reparation::with(['vehicule', 'technicien'])->get();
        return view('liste_reparation', compact('reparations'));
    }

    public function form()
    {
        $vehicules = Vehicule::all();
        $techniciens = Technicien::all();
        return view('form_reparation', compact('vehicules', 'techniciens'));
    }

    public function enregistrer(Request $request)
    {
        Reparation::create([
            'vehicule_id' => $request->vehicule_id,
            'technicien_id' => $request->technicien_id,
            'date' => $request->date,
            'duree_main_oeuvre' => $request->duree_main_oeuvre,
            'objet_reparation' => $request->objet_reparation,
        ]);

        return redirect()->route('liste_reparation')->with('success', 'Réparation ajoutée avec succès');
    }

    // Affichage du formulaire de modification
    public function modifier($id)
    {
        $reparation = Reparation::findOrFail($id);
        $vehicules = Vehicule::all();
        $techniciens = Technicien::all();

        return view('modifier_reparation', compact('reparation', 'vehicules', 'techniciens'));
    }

    // Traitement de la modification
    public function modifier_reparation(Request $request, $id)
    {
        $reparation = Reparation::findOrFail($id);

        $reparation->update([
            'vehicule_id' => $request->vehicule_id,
            'technicien_id' => $request->technicien_id,
            'date' => $request->date,
            'duree_main_oeuvre' => $request->duree_main_oeuvre,
            'objet_reparation' => $request->objet_reparation,
        ]);

        return redirect()->route('liste_reparation')->with('success', 'Réparation modifiée avec succès');
    }

    public function supprimer($id)
    {
        $reparation = Reparation::findOrFail($id);
        $reparation->delete();

        return redirect()->route('liste_reparation')->with('success', 'Réparation supprimée avec succès');
    }
}


