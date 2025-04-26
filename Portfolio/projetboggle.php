<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jeu Boggle | Denis Menoret</title>
    <link rel="stylesheet" href="./CSS/index.css" />
    <link rel="icon" type="image/x-icon" href="./images/selfphoto.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-lightGreen text-dark">

    <?php include('./Includes/navbar.php'); ?>

    <!-- ================== HEADER DU PROJET ================== -->
    <section class="container mt-5 text-center">
        <h1 class="display-5 fw-bold">Jeu Boggle</h1>
        <p class="lead">Jeu de lettres développé en Java avec interface graphique et validation des mots trouvés.</p>
        <div class="d-flex justify-content-center flex-wrap gap-2 mt-3">
            <span class="badge bg-darkGreen">Java</span>
            <span class="badge bg-darkGreen">C</span>
            <span class="badge bg-darkGreen">SQL</span>
            <span class="badge bg-darkGreen">PHP</span>
            <span class="badge bg-darkGreen">TypeScript</span>
            <span class="badge bg-darkGreen">Kotlin</span>
            <span class="badge bg-darkGreen">Réaliser</span>
            <span class="badge bg-darkGreen">Optimiser</span>
            <span class="badge bg-darkGreen">Collaborer</span>
        </div>
    </section>

    <!-- ================== IMAGE DE DEMO ================== -->
    <section class="container my-5 text-center">
        <img src="./images/imgboggle.png" class="img-fluid rounded shadow" alt="Jeu Boggle - visuel">
    </section>

    <!-- ================== DESCRIPTION DU PROJET ================== -->
    <section class="container mb-5">
        <div class="row gy-4">
            <div class="col-md-6">
                <h4>Situation</h4>
                <p>Projet de deuxième année réalisé individuellement. Objectif : implémenter une version informatique du célèbre jeu Boggle.</p>
            </div>
            <div class="col-md-6">
                <h4>Tâche</h4>
                <p>Développer une interface permettant à l’utilisateur de composer des mots en cliquant sur des lettres adjacentes, puis vérifier leur validité dans un dictionnaire.</p>
            </div>
            <div class="col-md-6">
                <h4>Actions</h4>
                <ul>
                    <li>Utilisation de Java et de la bibliothèque Swing pour l’interface</li>
                    <li>Génération aléatoire du plateau de lettres</li>
                    <li>Vérification de la validité des mots saisis via un dictionnaire</li>
                    <li>Gestion du score et des mots déjà trouvés</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Résultat</h4>
                <p>Un jeu de Boggle fonctionnel avec une interface graphique, une logique de validation et une expérience utilisateur fluide.</p>
            </div>
            <div class="col-md-6">
                <h4>Défis rencontrés</h4>
                <ul>
                    <li>Création d’une interface interactive avec Swing</li>
                    <li>Implémentation de la logique de parcours de lettres adjacentes</li>
                    <li>Optimisation de la recherche dans le dictionnaire</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Apprentissages</h4>
                <ul>
                    <li>Utilisation de Java pour créer des interfaces graphiques</li>
                    <li>Approfondissement des algorithmes de parcours (DFS)</li>
                    <li>Meilleure compréhension des interactions utilisateur et de la gestion d’événements</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================== LIENS ================== -->
    <section class="container text-center mb-5">
        <a href="./index.php#Projects" class="btn btn-outline-success btn-lg">
            Retour aux projets
        </a>
    </section>

    <?php include('./Includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>