<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Véhicule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h4>Modifier un Véhicule</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('save_vehicule', $vehicule->id) }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Immatriculation</label>
                        <input type="text" name="immatriculation" class="form-control" value="{{ $vehicule->immatriculation }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Marque</label>
                        <input type="text" name="marque" class="form-control" value="{{ $vehicule->marque }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Modèle</label>
                        <input type="text" name="modele" class="form-control" value="{{ $vehicule->modele }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Couleur</label>
                        <input type="text" name="couleur" class="form-control" value="{{ $vehicule->couleur }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Année</label>
                        <input type="number" name="annee" class="form-control" value="{{ $vehicule->annee }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kilométrage</label>
                        <input type="number" name="kilometrage" class="form-control" value="{{ $vehicule->kilometrage }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Carrosserie</label>
                        <input type="text" name="carrosserie" class="form-control" value="{{ $vehicule->carrosserie }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Énergie</label>
                        <select name="energie" class="form-select">
                            <option value="">-- Sélectionner --</option>
                            <option value="Essence" {{ $vehicule->energie == 'Essence' ? 'selected' : '' }}>Essence</option>
                            <option value="Diesel" {{ $vehicule->energie == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                            <option value="Hybride" {{ $vehicule->energie == 'Hybride' ? 'selected' : '' }}>Hybride</option>
                            <option value="Électrique" {{ $vehicule->energie == 'Électrique' ? 'selected' : '' }}>Électrique</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Boîte</label>
                        <select name="boite" class="form-select">
                            <option value="">-- Sélectionner --</option>
                            <option value="Manuelle" {{ $vehicule->boite == 'Manuelle' ? 'selected' : '' }}>Manuelle</option>
                            <option value="Automatique" {{ $vehicule->boite == 'Automatique' ? 'selected' : '' }}>Automatique</option>
                        </select>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                    <a href="{{ route('liste_vehicule') }}" class="btn btn-secondary">Annuler</a>
                </div>

            </form><br><br>
            <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-secondary">Retour</a>
    </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
