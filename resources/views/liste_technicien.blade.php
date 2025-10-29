<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Techniciens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center text-primary mb-4">Liste des Techniciens</h2>

    <div class="text-end mb-3">
        <a href="{{ route('form_technicien') }}" class="btn btn-success">+ Ajouter un technicien</a>
    </div>


    <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Spécialité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($techniciens as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->nom }}</td>
                <td>{{ $t->prenom }}</td>
                <td>{{ $t->specialite }}</td>
                <td>
                    <a href="{{ route('modifier_technicien', $t->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="{{ route('supprimer_technicien', $t->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce technicien ?')">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-secondary">Retour</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
