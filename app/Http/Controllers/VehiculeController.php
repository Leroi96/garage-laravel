<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\Technicien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class VehiculeController extends Controller
{
    public function enregistrer(Request $request)
    {
        Vehicule::create([
            'immatriculation' => $request->immatriculation,
            'marque' => $request->marque,
            'modele' => $request->modele,
            'couleur' => $request->couleur,
            'annee' => $request->annee,
            'kilometrage' => $request->kilometrage,
            'carrosserie' => $request->carrosserie,
            'energie' => $request->energie,
            'boite' => $request->boite,
        ]);

        return redirect()->route('liste_vehicule');
    }
    public function liste(Request $request)
{
    $vehicule = Vehicule::all();
    return view('liste_vehicule', compact('vehicule'));
}

    public function form()
{
    return view('form_vehicule');
}


    public function liste_vehicule(Request $request)
    {
        $vehicule = Vehicule::all();
        return view('liste_vehicule', compact('vehicule'));
    }

    public function supprimer_vehicule($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return redirect()->route('liste_vehicule');
    }

    public function modifier_vehicule($id)
    {
        $vehicule = Vehicule::find($id);
        return view('modifier_vehicule', compact('vehicule'));
    }

    public function save_vehicule(Request $request, $id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->immatriculation = $request->immatriculation;
        $vehicule->marque = $request->marque;
        $vehicule->modele = $request->modele;
        $vehicule->couleur = $request->couleur;
        $vehicule->annee = $request->annee;
        $vehicule->kilometrage = $request->kilometrage;
        $vehicule->carrosserie = $request->carrosserie;
        $vehicule->energie = $request->energie;
        $vehicule->boite = $request->boite;
        $vehicule->save();

        return redirect()->route('liste_vehicule');
    }
    public function modifier($id)
{
    $vehicule = Vehicule::find($id);
    return view('modifier_vehicule', compact('vehicule'));
}
public function save(Request $request, $id)
{
    $vehicule = Vehicule::find($id);

    $vehicule->immatriculation = $request->immatriculation;
    $vehicule->marque = $request->marque;
    $vehicule->modele = $request->modele;
    $vehicule->couleur = $request->couleur;
    $vehicule->annee = $request->annee;
    $vehicule->kilometrage = $request->kilometrage;
    $vehicule->carrosserie = $request->carrosserie;
    $vehicule->energie = $request->energie;
    $vehicule->boite = $request->boite;

    $vehicule->save();

    return redirect()->route('liste_vehicule');
}

}
