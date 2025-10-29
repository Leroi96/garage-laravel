<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Véhicules</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

         .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        footer {
            flex-shrink: 0;
            background-color: #222;
            color: white;
            text-align: center;
            padding: 12px 0;
        }
        footer a {
            color: #0dcaf0;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary">Liste des Véhicules</h1>


    <div class="mb-3 text-end">
        <a href="{{ route('form_vehicule') }}" class="btn btn-success">Ajouter un véhicule</a>
    </div>


    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Immatriculation</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Couleur</th>
                <th>Année</th>
                <th>Kilométrage</th>
                <th>Carrosserie</th>
                <th>Énergie</th>
                <th>Boîte</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicule as $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->immatriculation }}</td>
                <td>{{ $v->marque }}</td>
                <td>{{ $v->modele }}</td>
                <td>{{ $v->couleur }}</td>
                <td>{{ $v->annee }}</td>
                <td>{{ $v->kilometrage }}</td>
                <td>{{ $v->carrosserie }}</td>
                <td>{{ $v->energie }}</td>
                <td>{{ $v->boite }}</td>
                <td>
                    <a href="{{ route('modifier_vehicule', ['id' => $v->id]) }}" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="{{ route('supprimer_vehicule', ['id' => $v->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce véhicule ?')">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table><br><br>
    <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

<footer>
            <p>&copy; {{ date('Y') }} Garage AutoMotive — Tous droits réservés</p>
            <p>
                <i class="bi bi-geo-alt"></i> 25 Cotonou Womey
                | <i class="bi bi-telephone"></i> +2290196206571
                | <i class="bi bi-envelope"></i> <a href="mailto:dcreduis@gmail.com">dcreduis@gmail.com</a>
            </p>
        </footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
