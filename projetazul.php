<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jeu Azul | Denis Menoret</title>
  <link rel="stylesheet" href="./CSS/index.css" />
  <link rel="icon" type="image/x-icon" href="./images/selfphoto.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-lightGreen text-dark">

  <?php include('./Includes/navbar.php'); ?>

  <!-- ================== HEADER DU PROJET ================== -->
  <section class="container mt-5 text-center">
    <h1 class="display-5 fw-bold">Jeu Azul</h1>
    <p class="lead">Jeu de société développé en Python lors de ma première année de BUT Informatique.</p>
    <div class="d-flex justify-content-center flex-wrap gap-2 mt-3">
      <span class="badge bg-darkGreen">Python</span>
      <span class="badge bg-darkGreen">Librairie graphique</span>
      <span class="badge bg-darkGreen">Réaliser</span>
      <span class="badge bg-darkGreen">Optimiser</span>
    </div>
  </section>

  <!-- ================== IMAGE DE DEMO ================== -->
  <section class="container my-5 text-center">
    <img src="./images/imgazul.png" class="img-fluid rounded shadow" alt="Jeu Azul - visuel">
  </section>

  <!-- ================== DESCRIPTION DU PROJET ================== -->
  <section class="container mb-5">
    <div class="row gy-4">
      <div class="col-md-6">
        <h4>Situation</h4>
        <p>Projet réalisé durant ma première année de BUT Informatique à l'IUT Gustave Eiffel. Objectif : recréer un jeu de société en duo.</p>
      </div>
      <div class="col-md-6">
        <h4>Tâche</h4>
        <p>Développer le jeu Azul en Python à deux, avec une interface graphique fournie par l’université. Le jeu devait être fonctionnel et jouable avec des règles précises.</p>
      </div>
      <div class="col-md-6">
        <h4>Actions</h4>
        <ul>
          <li>Développement du moteur de jeu (règles, tours, scoring, pénalités…)</li>
          <li>Utilisation d'une librairie graphique Python fournie par l’université</li>
          <li>Implémentation de deux niveaux d’IA pour jouer contre l’ordinateur</li>
          <li>Travail en binôme avec coordination des tâches (communication et gestion des versions)</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h4>Résultat</h4>
        <p>Projet terminé avec succès. Jeu entièrement jouable avec une interface fluide. Très bien noté et apprécié par les enseignants. Le projet m’a permis de consolider mes bases en algorithmie et gestion de projet en binôme.</p>
      </div>
      <div class="col-md-6">
        <h4>Défis rencontrés</h4>
        <p>
          Les principaux défis ont été :
        <ul>
          <li>Communication et répartition du travail efficace avec mon binôme</li>
          <li>Complexité de la logique du jeu (placement, pénalité, scoring…)</li>
          <li>Implémentation d’une IA avec différents niveaux de difficulté</li>
        </ul>
        </p>
      </div>
      <div class="col-md-6">
        <h4>Apprentissages</h4>
        <p>
          Ce projet m’a permis d’approfondir :
        <ul>
          <li>Ma logique algorithmique</li>
          <li>L’utilisation d’interfaces graphiques Python</li>
          <li>La gestion de projet en binôme</li>
          <li>L’implémentation d’IA simple dans un jeu</li>
        </ul>
        </p>
      </div>
    </div>
  </section>

  <!-- ================== LIENS ================== -->
  <section class="container text-center mb-5">
    <!-- Pas de lien GitHub pour ce projet -->
    <a href="./index.php#Projects" class="btn btn-outline-success btn-lg">
      Retour aux projets
    </a>
  </section>

  <?php include('./Includes/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>