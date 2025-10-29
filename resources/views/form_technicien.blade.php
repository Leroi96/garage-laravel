<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Technicien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center">Ajouter un Technicien</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('enregistrer_technicien') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom" required>
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Entrez le prénom" required>
                </div>

                <div class="mb-3">
                    <label for="specialite" class="form-label">Spécialité</label>
                    <input type="text" name="specialite" id="specialite" class="form-control" placeholder="Ex : Mécanique, Carrosserie..." required>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                    <a href="{{ route('liste_technicien') }}" class="btn btn-secondary">Annuler</a>
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
