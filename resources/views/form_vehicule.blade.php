<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Véhicule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg">
        <div class="card-header bg-success text-white text-center">
            <h4>Ajouter un Véhicule</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('enregistrer_vehicule') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Immatriculation</label>
                        <input type="text" name="immatriculation" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Marque</label>
                        <input type="text" name="marque" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Modèle</label>
                        <input type="text" name="modele" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Couleur</label>
                        <input type="text" name="couleur" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Année</label>
                        <input type="number" name="annee" class="form-control" min="1900" max="2100">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kilométrage</label>
                        <input type="number" name="kilometrage" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Carrosserie</label>
                        <input type="text" name="carrosserie" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Énergie</label>
                        <select name="energie" class="form-select">
                            <option value="">-- Sélectionner --</option>
                            <option value="Essence">Essence</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Hybride">Hybride</option>
                            <option value="Électrique">Électrique</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Boîte</label>
                        <select name="boite" class="form-select">
                            <option value="">-- Sélectionner --</option>
                            <option value="Manuelle">Manuelle</option>
                            <option value="Automatique">Automatique</option>
                        </select>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                    <a href="{{ route('liste_vehicule') }}" class="btn btn-secondary">Annuler</a>
                </div>

            </form>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
