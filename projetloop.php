<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loop Hero | Denis Menoret</title>
    <link rel="stylesheet" href="./CSS/index.css" />
    <link rel="icon" type="image/x-icon" href="./images/selfphoto.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-lightGreen text-dark">

    <?php include('./Includes/navbar.php'); ?>

    <!-- ================== HEADER DU PROJET ================== -->
    <section class="container mt-5 text-center">
        <h1 class="display-5 fw-bold">Loop Hero</h1>
        <p class="lead">Version simplifiée du jeu vidéo Loop Hero développée en Java en première année de BUT Informatique.</p>
        <div class="d-flex justify-content-center flex-wrap gap-2 mt-3">
            <span class="badge bg-darkGreen">Java</span>
            <span class="badge bg-darkGreen">Jeu vidéo</span>
            <span class="badge bg-darkGreen">Réaliser</span>
            <span class="badge bg-darkGreen">Optimiser</span>
        </div>
    </section>

    <!-- ================== IMAGE DE DEMO ================== -->
    <section class="container my-5 text-center">
        <img src="./images/imgloop.png" class="img-fluid rounded shadow" alt="Loop Hero - visuel">
    </section>

    <!-- ================== DESCRIPTION DU PROJET ================== -->
    <section class="container mb-5">
        <div class="row gy-4">
            <div class="col-md-6">
                <h4>Situation</h4>
                <p>Projet individuel réalisé en Java en première année. Il s'agissait de recréer une version simplifiée du jeu Loop Hero.</p>
            </div>
            <div class="col-md-6">
                <h4>Tâche</h4>
                <p>Concevoir un moteur de jeu complet, intégrant une boucle de jeu, des combats, des cartes et de la gestion d'inventaire.</p>
            </div>
            <div class="col-md-6">
                <h4>Actions</h4>
                <ul>
                    <li>Création du système de déplacement automatique du héros sur la carte</li>
                    <li>Implémentation des combats automatiques entre héros et monstres</li>
                    <li>Gestion des cartes posées sur le terrain (effets, types, zones)</li>
                    <li>Interface graphique rudimentaire pour tester les fonctionnalités</li>
                    <li>Implémentation du système d’équipement, d’inventaire et de pause</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Résultat</h4>
                <p>Un prototype fonctionnel avec la majorité des fonctionnalités prévues. Projet terminé dans les délais, malgré les difficultés techniques rencontrées.</p>
            </div>
            <div class="col-md-6">
                <h4>Défis rencontrés</h4>
                <p>
                <ul>
                    <li>Première expérience avec la notion de boucle de jeu et système de temps</li>
                    <li>Difficultés avec la gestion d’événements temps-réel</li>
                    <li>Organisation du code pour un jeu modulaire et maintenable</li>
                </ul>
                </p>
            </div>
            <div class="col-md-6">
                <h4>Apprentissages</h4>
                <p>
                <ul>
                    <li>Structurer un projet Java complexe</li>
                    <li>Découverte de la programmation orientée "jeu"</li>
                    <li>Compréhension des logiques de pause, timers, events</li>
                    <li>Utilisation d’un mini moteur de jeu maison sans framework externe</li>
                </ul>
                </p>
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