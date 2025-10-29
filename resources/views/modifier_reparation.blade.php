<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une Réparation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .card {
            margin-top: 60px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #198754;
            margin-bottom: 20px;
            text-align: center;
        }
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 12px 0;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card p-4">
            <h2><i class="bi bi-pencil-square"></i> Modifier la Réparation</h2>

            <form action="{{ route('modifier_reparation', $reparation->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="vehicule_id" class="form-label">Véhicule :</label>
                    <select name="vehicule_id" id="vehicule_id" class="form-select" required>
                        <option value="">-- Sélectionnez un véhicule --</option>
                        @foreach ($vehicules as $v)
                            <option value="{{ $v->id }}" {{ $v->id == $reparation->vehicule_id ? 'selected' : '' }}>
                                {{ $v->marque }} {{ $v->modele }} ({{ $v->immatriculation }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="technicien_id" class="form-label">Technicien :</label>
                    <select name="technicien_id" id="technicien_id" class="form-select">
                        <option value="">-- Sélectionnez un technicien --</option>
                        @foreach ($techniciens as $t)
                            <option value="{{ $t->id }}" {{ $t->id == $reparation->technicien_id ? 'selected' : '' }}>
                                {{ $t->nom }} {{ $t->prenom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date :</label>
                    <input type="date" id="date" name="date" class="form-control" value="{{ $reparation->date }}" required>
                </div>

                <div class="mb-3">
                    <label for="duree_main_oeuvre" class="form-label">Durée Main d’œuvre (minutes) :</label>
                    <input type="number" id="duree_main_oeuvre" name="duree_main_oeuvre" class="form-control" value="{{ $reparation->duree_main_oeuvre }}">
                </div>

                <div class="mb-3">
                    <label for="objet_reparation" class="form-label">Objet de la Réparation :</label>
                    <textarea id="objet_reparation" name="objet_reparation" class="form-control" rows="4" required>{{ $reparation->objet_reparation }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="bi bi-save"></i> Enregistrer les modifications
                    </button>
                    <a href="{{ route('liste_reparation') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Annuler
                    </a>
                </div>
            </form>
            <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-secondary">Retour</a>
    </div>
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Garage AutoMotive — Gestion des réparations</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
