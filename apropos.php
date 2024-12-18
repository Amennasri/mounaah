<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/styles.css">
    <title>A propos de nous</title>
    <style>
        /*body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .text-logo {
            font-family: 'Holtwood One SC', sans-serif;
            color: #e7480f;
            text-shadow: 2px 2px #ffd301;
            font-size: 50px;
            padding: 20px;
            text-align: center;
        }*/

        .statistics {
            margin: 20px 0;
        }

        .statistics .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .concept {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <h3 class="text-logo text-center">
        <img src="logo.png" alt="Mouneh Logo" style="height: 100px; margin-right: 10px;">
        Mouneh
        <img src="logo.png" alt="Mouneh Logo" style="height: 100px; margin-left: 10px;">
    </h3>

    <nav>
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="accueil.php">Accueil</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="index.php">Mes dons</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="avis_client.php">Avis client</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="quiz.html">Quiz</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="alertes.php">Alerte</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="astuces.php">Astuces</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab11" role="tab">A propos de nous</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        <!-- Présentation du concept -->
        <section class="concept mb-4">
            <h2 class="text-center">Notre Concept</h2>
            <p>
                **Mouneh** est une plateforme innovante conçue pour lutter contre le gaspillage alimentaire tout en
                favorisant la solidarité sociale. Nous connectons des donneurs de denrées alimentaires à ceux qui en ont
                besoin, qu'ils soient des particuliers ou des organisations caritatives. Grâce à Mouneh, nous cherchons
                à réduire le gaspillage et à construire une communauté plus solidaire.
            </p>
        </section>

        <!-- Statistiques -->
        <section class="statistics">
            <h2 class="text-center mb-4">Statistiques sur le gaspillage alimentaire en Tunisie</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h3>1/3</h3>
                        <p>de la nourriture produite en Tunisie est gaspillée chaque année.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h3>400K</h3>
                        <p>tonnes de pain sont gaspillées annuellement.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h3>20%</h3>
                        <p>des fruits et légumes ne sont pas consommés.</p>
                    </div>
                </div>
            </div>
            <p class="text-center mt-4">
                Ces chiffres mettent en lumière l'importance d'agir pour réduire ce gaspillage et redistribuer les
                surplus alimentaires de manière responsable.
            </p>
        </section>
    </div>

    <footer class="footer">
        © 2024 Mouneh - Partagez plus. Gaspillez moi!
    </footer>
</body>

</html>