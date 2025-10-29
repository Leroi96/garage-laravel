<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Garage Auto - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        header {
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            height: 60px;
        }

        .hero {
            text-align: center;
            color: white;
            padding: 60px 20px;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.03);
        }

        footer {
            background-color: rgba(0, 0, 0, 0.85);
            color: white;
            text-align: center;
            padding: 20px 0;
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
    <div class="overlay">

        <header>
            <div class="d-flex align-items-center">
                <img src="logo.png" alt="Logo Garage">
                <h2 class="text-white ms-3">Garage AutoMotive</h2>
            </div>
            <nav>
                <a href="{{ route('liste_vehicule') }}" class="btn btn-outline-success me-2">Véhicules</a>
                <a href="{{ route('liste_technicien') }}" class="btn btn-outline-primary me-2">Techniciens</a>
                <a href="{{ route('liste_reparation') }}" class="btn btn-outline-warning text-white">Réparations</a>
            </nav>
        </header>

        <div class="hero">
            <h1 class="display-5 mb-3">Bienvenue au Garage AutoMotive</h1>
            <p class="lead mb-5">Réparation, entretien et diagnostic automobile — qualité et confiance depuis 1998.</p>

            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=1600&q=80'" class="card-img-top" alt="Peugeot 208">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Peugeot 208</h5>
                                <p class="card-text">Compacte et économique, parfaite pour la ville et les petits trajets.</p>
                                <a href="{{ route('liste_vehicule') }}" class="btn btn-outline-success">Détails</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Audi A4">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Audi A4</h5>
                                <p class="card-text">Berline élégante et confortable, idéale pour les longs trajets.</p>
                                <a href="{{ route('liste_vehicule') }}" class="btn btn-outline-success">Détails</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Renault Clio">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Renault Clio</h5>
                                <p class="card-text">Une citadine fiable et moderne, alliant confort et performance.</p>
                                <a href="{{ route('liste_vehicule') }}" class="btn btn-outline-success">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
