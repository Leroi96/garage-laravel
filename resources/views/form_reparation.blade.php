<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une Réparation</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5 p-4 rounded shadow bg-white">
        <h2 class="mb-4 text-center text-primary">Ajouter une Réparation</h2>

        <form action="{{ route('enregistrer_reparation') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="vehicule_id" class="form-label fw-bold">Véhicule</label>
                <select name="vehicule_id" id="vehicule_id" class="form-select" required>
                    <option value="">-- Sélectionnez un véhicule --</option>
                    @foreach($vehicules as $v)
                        <option value="{{ $v->id }}">{{ $v->immatriculation }} - {{ $v->marque }} {{ $v->modele }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="technicien_id" class="form-label fw-bold">Technicien</label>
                <select name="technicien_id" id="technicien_id" class="form-select" required>
                    <option value="">-- Sélectionnez un technicien --</option>
                    @foreach($techniciens as $t)
                        <option value="{{ $t->id }}">{{ $t->nom }} {{ $t->prenom }} ({{ $t->specialite }})</option>
                    @endforeach
                </select>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="date" class="form-label fw-bold">Date de Réparation</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="duree" class="form-label fw-bold">Durée (en heures)</label>
                    <input type="number" name="duree" id="duree" class="form-control" min="1" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="objet_reparation" class="form-label fw-bold">Objet</label>
                <input type="text" name="objet_reparation" id="objet_reparation" class="form-control" placeholder="Ex: Changement de pneus" required>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success me-2"><i class="bi bi-save"></i> Enregistrer</button>
                <a href="{{ route('liste_reparation') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Annuler</a>
            </div>
        </form><br><br>
        <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-secondary">Retour</a>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
