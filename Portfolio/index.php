<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Denis Menoret</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="./images/selfphoto.png">
    <!-- AOS (Animate On Scroll) CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include('./Includes/navbar.php'); ?>
    </header>

    <main>
        <!-- ================== SECTION ACCUEIL ================== -->
        <section id="Accueil" style="background-color: #e6f4ea; min-height: 100vh; display: flex; align-items: center;">
            <div class="container text-center">
                <!-- Titre principal -->
                <h1 class="display-4 fw-bold" data-aos="fade-down">Denis MENORET</h1>

                <!-- Sous-titre avec description -->
                <p class="lead mt-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    Je suis développeur informatique, étudiant en 3ème année de BUT Informatique à l'IUT Gustave Eiffel.<br />
                    Je vous souhaite la bienvenue sur mon portfolio.
                </p>

                <!-- Boutons d'action (CTA) -->
                <div class="d-flex justify-content-center gap-3" data-aos="zoom-in" data-aos-delay="400">
                    <!-- Bouton vers le CV -->
                    <a href="./CV/cv.pdf" class="btn btn-success btn-lg" target="_blank">
                        Voir mon CV
                    </a>

                    <!-- Bouton contact par mail -->
                    <a href="mailto:denismenoret04@gmail.com" class="btn btn-outline-success btn-lg">
                        Me contacter
                    </a>
                </div>

                <!-- Indicateur de scroll -->
                <div class="scroll-indicator-container">
                    <a href="#About" class="scroll-indicator">
                        <i class="bi bi-chevron-double-down"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- ================== SECTION ABOUT ================== -->
        <section id="About" style="background-color: #e6f4ea; min-height: 100vh; padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <!-- Titre -->
                        <h2 class="mb-4" data-aos="fade-up">À propos de moi</h2>

                        <!-- Texte principal -->
                        <p class="text-start" data-aos="fade-up" data-aos-delay="100">
                            Bonjour, je m'appelle <strong>Denis Menoret</strong>, j'ai 20 ans et je suis actuellement étudiant en 3ème année de BUT Informatique.<br><br>
                            S'il y a une chose qui me fascine plus que tout dans l'informatique, c’est comment des petites fonctions peuvent s’assembler pour créer un système complet.<br><br>
                            En dehors du numérique, j’ai aussi des hobbies comme les <strong>mangas</strong>, les <strong>jeux vidéo</strong>, l’<strong>escalade</strong> et le <strong>tir à l’arc</strong> que je pratiquais régulièrement en famille. J’espère pouvoir m’y consacrer à nouveau après mes études.<br><br>
                            J’aime aussi faire des <strong>promenades en forêt</strong> avec le chien de mes parents, en explorant de nouveaux itinéraires. Je suis quelqu’un de <strong>curieux</strong> qui aime apprendre, revoir les choses et m’améliorer. Quand je sais ce que j’ai à faire, je m’implique à fond dans mon travail.
                        </p>

                        <!-- Liste des voyages -->
                        <p class="mt-4" data-aos="fade-up" data-aos-delay="200">
                            J'ai eu la chance de voyager dans plusieurs pays, ce qui a renforcé mon intérêt pour les langues et cultures étrangères :
                        </p>
                        <ul class="list-unstyled text-start">
                            <li>
                                <img src="./images/flags/japan.png" alt="Japon" width="24" class="me-2 align-middle">
                                Japon
                            </li>
                            <li>
                                <img src="./images/flags/england.png" alt="Angleterre" width="24" class="me-2 align-middle">
                                Angleterre
                            </li>
                            <li>
                                <img src="./images/flags/italia.png" alt="Italie" width="24" class="me-2 align-middle">
                                Italie
                            </li>
                            <li>
                                <img src="./images/flags/spain.png" alt="Espagne" width="24" class="me-2 align-middle">
                                Espagne
                            </li>
                            <li>
                                <img src="./images/flags/belgium.jpg" alt="Belgique" width="24" class="me-2 align-middle">
                                Belgique (Euro Space Center)
                            </li>
                            <li>
                                <img src="./images/flags/spain.png" alt="Espagne" width="24" class="me-2 align-middle">
                                Île de Ténérife
                            </li>
                            <li>
                                <img src="./images/flags/mauritus.png" alt="Île Maurice" width="24" class="me-2 align-middle">
                                Île Maurice
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Galerie hobbies -->
                <div class="row mt-5 justify-content-center g-3">
                    <div class="col-sm-6 col-md-4" data-aos="zoom-in">
                        <img src="./images/imgarc.JPG" class="img-fluid rounded shadow" alt="Tir à l'arc">
                    </div>
                    <div class="col-sm-6 col-md-4" data-aos="zoom-in" data-aos-delay="100">
                        <img src="./images/imgescalade.jpeg" class="img-fluid rounded shadow" alt="Escalade">
                    </div>
                    <div class="col-sm-6 col-md-4" data-aos="zoom-in" data-aos-delay="200">
                        <img src="./images/imgcible.webp" class="img-fluid rounded shadow" alt="Cible">
                    </div>
                </div>
            </div>
        </section>

        <!-- ================== SECTION PARCOURS ================== -->
        <section id="Parcours" style="background-color: #e6f4ea; min-height: 100vh; padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-up">Mon parcours</h2>

                <div class="timeline position-relative">

                    <!-- Bloc 1 : La Javaness -->
                    <div class="timeline-item left" data-aos="fade-right">
                        <div class="content left">
                            <h5>Alternance chez La Javaness (2022 - 2024)</h5>
                            <p>
                                Contrat d’apprentissage de 2 ans dans une entreprise spécialisée en IA. Découverte du monde pro, missions en JavaScript, TypeScript, migration de code, tests, projets IA.
                                <br><a href="https://www.lajavaness.com/" target="_blank">👉 Voir le site</a>
                            </p>
                        </div>
                        <div class="timeline-icon left">
                            <img src="./images/imgjavaness.jpeg" alt="La Javaness" />
                        </div>
                    </div>

                    <!-- Bloc 2 : BUT Informatique -->
                    <div class="timeline-item right" data-aos="fade-left">
                        <div class="content right">
                            <h5>BUT Informatique – IUT Gustave Eiffel (2021 - 2024)</h5>
                            <p>
                                Formation à Champs-sur-Marne. Apprentissage de nombreux langages : Java, PHP, HTML/CSS, C, SQL… Option alternance dès la 2ème année.
                            </p>
                        </div>
                        <div class="timeline-icon right">
                            <img src="./images/université.png" alt="IUT Gustave Eiffel" />
                        </div>
                    </div>

                    <!-- Bloc 3 : Bac -->
                    <div class="timeline-item left" data-aos="fade-right">
                        <div class="content left">
                            <h5>Bac Général – Lycée Langevin-Wallon (2021)</h5>
                            <p>
                                Mention Bien – Option ICN : premières lignes de code en Python et SQL. Naissance d'une passion pour l’informatique.
                            </p>
                        </div>
                        <div class="timeline-icon left">
                            <img src="./images/langevinwallon.png" alt="Lycée Wallon" />
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================== SECTION COMPÉTENCES ================== -->
        <section id="Skills" style="background-color: #e6f4ea; min-height: 100vh; padding-top: 80px; padding-bottom: 80px;">
            <div class="container text-center">
                <h2 class="mb-4" data-aos="fade-up">Mes compétences</h2>

                <!-- Filtres -->
                <div class="btn-group mb-4" role="group" aria-label="Filtres compétences">
                    <button type="button" class="btn btn-outline-success active" data-filter="langages">Langages</button>
                    <button type="button" class="btn btn-outline-success" data-filter="frameworks">Frameworks et Librairies</button>
                    <button type="button" class="btn btn-outline-success" data-filter="bdd">Base de Données</button>
                    <button type="button" class="btn btn-outline-success" data-filter="outils">Outils</button>
                    <button type="button" class="btn btn-outline-success" data-filter="universitaire">Universitaire</button>
                </div>

                <!-- Grille compétences -->
                <div id="skillsGrid" class="row justify-content-center g-4" data-aos="fade-up">
                    <!-- Les éléments seront insérés ici dynamiquement par JavaScript -->
                </div>

                <!-- Modal universelle pour les compétences universitaires -->
                <div class="modal fade" id="univModal" tabindex="-1" aria-labelledby="univModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-animate-zoom">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="univModalLabel">Titre</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body" id="univModalBody">
                                Description
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================== SECTION PROJETS ================== -->
        <section id="Projects" style="background-color: #e6f4ea; padding: 80px 0;">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-up">Mes projets</h2>

                <div class="row g-4">
                    <!-- Projet Azul -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="card text-white h-100 shadow-sm rounded-4 overflow-hidden" style="background-color: #2e7d4f !important;">
                            <img src="./images/imgazul.png" class="card-img-top" alt="Jeu Azul">
                            <div class="card-body">
                                <h5 class="card-title">Jeu Azul</h5>
                                <p class="card-text">Projet Python réalisé en binôme : jeu de société implémenté graphiquement.</p>
                                <div class="mb-3">
                                    <span class="badge bg-lightGreen">Python</span>
                                    <span class="badge bg-lightGreen">Librairie graphique</span>
                                    <span class="badge bg-lightGreen">Réaliser</span>
                                    <span class="badge bg-lightGreen">Optimiser</span>
                                </div>
                                <a href="projetazul.php" class="btn btn-outline-light btn-sm">+ Détail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Loop Hero -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card text-white h-100 shadow-sm rounded-4 overflow-hidden" style="background-color: #2e7d4f !important;">
                            <img src="./images/imgloop.png" class="card-img-top" alt="Jeu Loop Hero">
                            <div class="card-body">
                                <h5 class="card-title">Jeu Loop Hero</h5>
                                <p class="card-text">Adaptation d’un jeu vidéo en Java, gestion d’événements et d'intervalles.</p>
                                <div class="mb-3">
                                    <span class="badge bg-lightGreen">Java</span>
                                    <span class="badge bg-lightGreen">Programmation objet</span>
                                    <span class="badge bg-lightGreen">Réaliser</span>
                                    <span class="badge bg-lightGreen">Optimiser</span>
                                </div>
                                <a href="projetloop.php" class="btn btn-outline-light btn-sm">+ Détail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Projet INGRID -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card text-white h-100 shadow-sm rounded-4 overflow-hidden" style="background-color: #2e7d4f !important;">
                            <img src="./images/imgINGRID.webp" class="card-img-top" alt="Projet INGRID">
                            <div class="card-body">
                                <h5 class="card-title">Projet INGRID</h5>
                                <p class="card-text">Refonte d’un site web universitaire en équipe. Projet de 3ème année.</p>
                                <div class="mb-3">
                                    <span class="badge bg-lightGreen">HTML</span>
                                    <span class="badge bg-lightGreen">CSS</span>
                                    <span class="badge bg-lightGreen">JavaScript</span>
                                    <span class="badge bg-lightGreen">dataTables</span>
                                    <span class="badge bg-lightGreen">Express.js</span>
                                    <span class="badge bg-lightGreen">Prysma</span>
                                    <span class="badge bg-lightGreen">Réaliser</span>
                                    <span class="badge bg-lightGreen">Optimiser</span>
                                    <span class="badge bg-lightGreen">Gérer</span>
                                    <span class="badge bg-lightGreen">Conduire</span>
                                    <span class="badge bg-lightGreen">Collaborer</span>
                                </div>
                                <a href="projetweb.php" class="btn btn-outline-light btn-sm">+ Détail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Boggle -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card text-white h-100 shadow-sm rounded-4 overflow-hidden" style="background-color: #2e7d4f !important;">
                            <img src="./images/imgboggle.png" class="card-img-top" alt="Jeu Boggle">
                            <div class="card-body">
                                <h5 class="card-title">Jeu Boggle</h5>
                                <p class="card-text">Implémentation d’un Boggle avec vérification de mots & interface.</p>
                                <div class="mb-3">
                                    <span class="badge bg-lightGreen">Java</span>
                                    <span class="badge bg-lightGreen">C</span>
                                    <span class="badge bg-lightGreen">SQL</span>
                                    <span class="badge bg-lightGreen">PHP</span>
                                    <span class="badge bg-lightGreen">TypeScript</span>
                                    <span class="badge bg-lightGreen">Kotlin</span>
                                    <span class="badge bg-lightGreen">Réaliser</span>
                                    <span class="badge bg-lightGreen">Optimiser</span>
                                    <span class="badge bg-lightGreen">Collaborer</span>
                                </div>
                                <a href="projetboggle.php" class="btn btn-outline-light btn-sm">+ Détail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include('./Includes/footer.php'); ?>
    </footer>

    <!-- Bootstrap Bundle JS (inclut Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Durée de base des animations (en ms)
            once: true // L’animation ne se rejoue pas quand on rescroll
        });
    </script>
    <script>
        const skillsData = {
            langages: [{
                    name: "Python",
                    icon: "python.png"
                },
                {
                    name: "Java",
                    icon: "java.png"
                },
                {
                    name: "PHP",
                    icon: "php.png"
                },
                {
                    name: "HTML",
                    icon: "html.png"
                },
                {
                    name: "CSS",
                    icon: "css.png"
                },
                {
                    name: "JavaScript",
                    icon: "javascript.png"
                }
            ],
            frameworks: [{
                    name: "Bootstrap",
                    icon: "bootstrap.png"
                },
                {
                    name: "React",
                    icon: "react.png"
                },
                {
                    name: "Node.js",
                    icon: "nodejs.png"
                },
                {
                    name: "Express",
                    icon: "expressjs.png"
                }
            ],
            bdd: [{
                    name: "MySQL",
                    icon: "mysql.png"
                },
                {
                    name: "PostgreSQL",
                    icon: "postgresql.png"
                },
                {
                    name: "MongoDB",
                    icon: "mongodb.png"
                }
            ],
            outils: [{
                    name: "GitHub",
                    icon: "github.png"
                },
                {
                    name: "Jira",
                    icon: "jira.png"
                },
                {
                    name: "VS Code",
                    icon: "vscode.png"
                }
            ],
            universitaire: [{
                    name: "Réaliser",
                    color: "#c62828",
                    description: "Développer — c’est-à-dire concevoir, coder, tester et intégrer — une solution informatique pour un client."
                },
                {
                    name: "Optimiser",
                    color: "#ef6c00",
                    description: "Proposer des applications informatiques optimisées en fonction de critères spécifiques : temps d’exécution, précision, consommation de ressources..."
                },
                {
                    name: "Administrer",
                    color: "#f9a825",
                    description: "Installer, configurer, mettre à disposition, maintenir en conditions opérationnelles des infrastructures, des services et des réseaux et optimiser le système informatique d’une organisation."
                },
                {
                    name: "Gérer",
                    color: "#7cb342",
                    description: "Concevoir, gérer, administrer et exploiter les données de l’entreprise et mettre à disposition toutes les informations pour un bon pilotage de l’entreprise."
                },
                {
                    name: "Conduire",
                    color: "#1565c0",
                    description: "Satisfaire les besoins des utilisateurs au regard d’un cahier des charges exprimé en adoptant une démarche de gestion de projet rigoureuse avec des méthodes classiques ou agiles."
                },
                {
                    name: "Collaborer",
                    color: "#212121",
                    description: "Acquérir, développer et exploiter les aptitudes nécessaires pour travailler efficacement dans une équipe informatique."
                }
            ]
        };

        const grid = document.getElementById("skillsGrid");
        const buttons = document.querySelectorAll("[data-filter]");

        function renderSkills(category) {
            grid.innerHTML = "";

            if (category === "universitaire") {
                skillsData[category].forEach((skill) => {
                    const col = document.createElement("div");
                    col.className = "col-12 col-sm-6 col-lg-4";
                    col.innerHTML = `
                    <div class="skill-card-univ text-white rounded d-flex justify-content-center align-items-center text-center"
                        style="background-color: ${skill.color}; height: 120px; cursor: pointer;">
                        <strong>${skill.name}</strong>
                    </div>
                    `;

                    // Ajout du comportement d'ouverture de la modal
                    col.querySelector(".skill-card-univ").addEventListener("click", () => {
                        document.getElementById("univModalLabel").innerText = skill.name;
                        document.getElementById("univModalBody").innerText = skill.description;
                        const modal = new bootstrap.Modal(document.getElementById("univModal"));
                        modal.show();
                    });

                    grid.appendChild(col);
                });
                return;
            }

            skillsData[category].forEach(skill => {
                const col = document.createElement("div");
                col.className = "col-6 col-sm-4 col-md-3 col-lg-2";
                col.innerHTML = `
                    <div class="skill-card p-4 bg-light rounded text-center shadow-sm h-100 d-flex flex-column justify-content-center align-items-center">
                    <img src="./images/icons/${skill.icon}" alt="${skill.name}" class="mb-2" style="width:40px; height:40px;">
                    <strong>${skill.name}</strong>
                    </div>
                `;
                grid.appendChild(col);
            });
        }

        // Activation initiale
        renderSkills("langages");

        // Ajout d'écouteur sur chaque bouton
        buttons.forEach(btn => {
            btn.addEventListener("click", () => {
                buttons.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                renderSkills(btn.dataset.filter);
            });
        });
    </script>
</body>

</html>