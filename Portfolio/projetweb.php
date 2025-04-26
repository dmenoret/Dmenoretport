<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet INGRID | Denis Menoret</title>
    <link rel="stylesheet" href="./CSS/index.css" />
    <link rel="icon" type="image/x-icon" href="./images/selfphoto.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-lightGreen text-dark">

    <?php include('./Includes/navbar.php'); ?>

    <!-- ================== HEADER DU PROJET ================== -->
    <section class="container mt-5 text-center">
        <h1 class="display-5 fw-bold">Projet INGRID</h1>
        <p class="lead">Refonte collaborative du site web universitaire – Projet de 3e année</p>
        <div class="d-flex justify-content-center flex-wrap gap-2 mt-3">
            <span class="badge bg-darkGreen">HTML</span>
            <span class="badge bg-darkGreen">CSS</span>
            <span class="badge bg-darkGreen">JavaScript</span>
            <span class="badge bg-darkGreen">dataTables</span>
            <span class="badge bg-darkGreen">Express.js</span>
            <span class="badge bg-darkGreen">Prysma</span>
            <span class="badge bg-darkGreen">Réaliser</span>
            <span class="badge bg-darkGreen">Optimiser</span>
            <span class="badge bg-darkGreen">Gérer</span>
            <span class="badge bg-darkGreen">Conduire</span>
            <span class="badge bg-darkGreen">Collaborer</span>
        </div>
    </section>

    <!-- ================== IMAGE DE DEMO ================== -->
    <section class="container my-5 text-center">
        <img src="./images/imgINGRID.webp" class="img-fluid rounded shadow" alt="Projet INGRID - visuel">
    </section>

    <!-- ================== DESCRIPTION DU PROJET ================== -->
    <section class="container mb-5">
        <div class="row gy-4">
            <div class="col-md-6">
                <h4>Situation</h4>
                <p>Projet de fin d'études de 3e année. Reprise et amélioration d’un site web universitaire réalisé par une autre équipe l'année précédente.</p>
            </div>
            <div class="col-md-6">
                <h4>Tâche</h4>
                <p>Comprendre le besoin des utilisateurs (étudiants, enseignants, personnels), améliorer l’existant, ajouter des fonctionnalités selon les retours récoltés.</p>
            </div>
            <div class="col-md-6">
                <h4>Actions</h4>
                <ul>
                    <li>Participation à des réunions avec les parties prenantes</li>
                    <li>Analyse de l’existant et ajout de fonctionnalités spécifiques (emplois du temps, messagerie, notes...)</li>
                    <li>Refonte graphique de l’interface utilisateur</li>
                    <li>Travail d’équipe : répartitions claires et intégration des modules développés</li>
                    <li>Utilisation de modules comme DataTables, Express, Prysma</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Résultat</h4>
                <p>Projet achevé avec succès, site déployé pour démonstration. Toutes les fonctionnalités majeures ont été validées par le professeur. Refonte propre et responsive.</p>
            </div>
            <div class="col-md-6">
                <h4>Défis rencontrés</h4>
                <p>
                <ul>
                    <li>Compréhension du projet existant et montée en compétence rapide</li>
                    <li>Adaptation à un projet d’équipe avancé (6 personnes)</li>
                    <li>Répartition claire des responsabilités pour ne pas se bloquer</li>
                </ul>
                </p>
            </div>
            <div class="col-md-6">
                <h4>Apprentissages</h4>
                <p>
                <ul>
                    <li>Gestion de projet web de A à Z</li>
                    <li>Travail avec Express.js et Prysma pour la première fois</li>
                    <li>Intégration de retours utilisateurs dans un cycle de développement agile</li>
                    <li>Collaboration efficace et communication dans une équipe complète</li>
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