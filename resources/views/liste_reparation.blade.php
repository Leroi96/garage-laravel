<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Réparations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }


        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f6f9;
        }


        .main-content {
            flex: 1 0 auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .table th {
            background-color: #e6d70e;
            color: white;
        }
        .btn {
            border-radius: 20px;
        }

        h2 {
            color: #e6d70e;
            text-align: center;
            margin-bottom: 30px;
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

<body>
    <div class="container main-content">
        <div class="top-bar">
            <h2><i class="bi bi-tools"></i> Liste des Réparations</h2>
            <a href="{{ route('form_reparation') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Ajouter une réparation
            </a>
        </div>

        <div class="table-responsive shadow-sm bg-white rounded p-3">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Véhicule</th>
                        <th>Technicien</th>
                        <th>Date</th>
                        <th>Durée Main d’Œuvre (min)</th>
                        <th>Objet de Réparation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reparations as $r)
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td>{{ $r->vehicule->marque ?? '—' }} {{ $r->vehicule->modele ?? '' }}</td>
                            <td>{{ $r->technicien->nom ?? 'Non attribué' }} {{ $r->technicien->prenom ?? '' }}</td>
                            <td>{{ $r->date }}</td>
                            <td>{{ $r->duree_main_oeuvre ?? '—' }}</td>
                            <td>{{ $r->objet_reparation }}</td>
                            <td>
                                <a href="{{ route('modifier_reparation', $r->id) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil"></i> Modifier
                                </a>
                                <a href="{{ route('supprimer_reparation', $r->id) }}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Voulez-vous vraiment supprimer cette réparation ?')">
                                    <i class="bi bi-trash"></i> Supprimer
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left-circle"></i> Retour
            </a>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} Garage AutoMotive — Gestion des réparations</p>
            <small>Adresse : 25 Rue du Mécanicien • Tél : 01 45 67 89 10 • <a href="mailto:contact@autopro.fr">contact@autopro.fr</a></small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
