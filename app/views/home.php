<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Takalo.mg — Échange d'objets</title>
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --brand: #2b8a9e;
      --accent: #ffd166;
    }
    body {
      font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: #f8fafb;
    }
    .hero {
      background: linear-gradient(135deg, rgba(43,138,158,0.95), rgba(47,80,200,0.9));
      color: white;
      padding: 4.5rem 0;
      border-bottom-left-radius: 2rem;
      border-bottom-right-radius: 2rem;
      margin-bottom: 2rem;
    }
    .brand {
      font-weight: 700;
      color: var(--brand);
    }
    .card-image {
      height: 180px;
      object-fit: cover;
      border-top-left-radius: .5rem;
      border-top-right-radius: .5rem;
    }
    .ad-badge {
      background: rgba(255, 209, 102, 0.95);
      color: #333;
      font-weight: 600;
    }
    footer {
      background: #0f1724;
      color: #cbd5e1;
      padding: 2rem 0;
      margin-top: 3rem;
    }
    .btn-cta {
      background: var(--accent);
      color: #062a3b;
      font-weight: 600;
      border: none;
    }
    @media (max-width: 767px) {
      .hero { padding: 3rem 1rem; border-radius: 0; }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <img src="assets/images/logo.png" alt="Takalo.mg" width="34" height="34" style="border-radius:6px; object-fit:cover;">
        <span class="ms-1">Takalo.mg</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="#how">Comment ça marche</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Connexion</a></li>
          <li class="nav-item ms-2">
            <button class="btn btn-cta btn-sm" data-bs-toggle="modal" data-bs-target="#signupModal">S'inscrire</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 text-white">
          <h1 class="display-5 fw-bold">Takalo.mg — Échangez vos objets facilement</h1>
          <p class="lead mb-4">Donnez une seconde vie à vos vêtements, livres, DVD et plus encore. Proposez un échange, trouvez ce qu'il vous manque, et changez de propriétaire en un clic.</p>
          <div class="d-flex gap-2">
            <button class="btn btn-cta btn-lg me-2" data-bs-toggle="modal" data-bs-target="#signupModal">S'inscrire gratuitement</button>
            <a href="#how" class="btn btn-outline-light btn-lg">Comment ça marche</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="container">

    <!-- Ads / Publicités carousel -->
    <section class="mb-4">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h4 class="mb-0">Publicités</h4>
        <small class="text-muted">Promotions et annonces</small>
      </div>
      <div id="adsCarousel" class="carousel slide shadow-sm" data-bs-ride="carousel">
        <div class="carousel-inner rounded">
          <div class="carousel-item active">
            <div class="d-flex flex-column flex-md-row align-items-center gap-3 p-3" style="background: linear-gradient(90deg,#fff7e6,#f8fafb);">
              <img src="https://images.unsplash.com/photo-1581579181175-3ce5af6f8b9e?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=2" class="rounded" alt="pub1" style="width:180px; height:110px; object-fit:cover;">
              <div>
                <h5 class="mb-1">Marché local: remise 10%</h5>
                <p class="mb-0 text-muted">Partenaire Takalo : réductions pour les échanges locaux.</p>
              </div>
              <span class="badge ad-badge ms-auto py-2 px-3">Annonce</span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex flex-column flex-md-row align-items-center gap-3 p-3" style="background: linear-gradient(90deg,#e8f8ff,#fff);">
              <img src="https://images.unsplash.com/photo-1470309864661-68328b2cd0a5?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=2" class="rounded" alt="pub2" style="width:180px; height:110px; object-fit:cover;">
              <div>
                <h5 class="mb-1">Livraison solidaire</h5>
                <p class="mb-0 text-muted">Option livraison disponible pour certains échanges.</p>
              </div>
              <span class="badge ad-badge ms-auto py-2 px-3">Sponsorisée</span>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex flex-column flex-md-row align-items-center gap-3 p-3" style="background: linear-gradient(90deg,#f0fff4,#fff);">
              <img src="https://images.unsplash.com/photo-1523381210000-63a0ee2a0a2b?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=2" class="rounded" alt="pub3" style="width:180px; height:110px; object-fit:cover;">
              <div>
                <h5 class="mb-1">Ateliers d'échange</h5>
                <p class="mb-0 text-muted">Rencontrez d'autres takaloers dans votre ville.</p>
              </div>
              <span class="badge ad-badge ms-auto py-2 px-3">Événement</span>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#adsCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#adsCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
    </section>


    <!-- Featured items -->
    <section id="items" class="mb-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Objets récemment publiés</h4>
        <a href="#" class="small text-muted">Voir tout</a>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=3" class="card-image" alt="robe vintage">
            <div class="card-body">
              <h5 class="card-title">Robe vintage</h5>
              <p class="card-text text-muted small">Taille M — très bon état. Échange contre un sac ou accessoires.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-primary">Proposer un échange</button>
                <small class="text-muted">Antananarivo</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=4" class="card-image" alt="livre">
            <div class="card-body">
              <h5 class="card-title">Lot de romans</h5>
              <p class="card-text text-muted small">4 romans contemporains — échange contre BD ou jeux.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-primary">Proposer un échange</button>
                <small class="text-muted">Fianarantsoa</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=5" class="card-image" alt="dvd">
            <div class="card-body">
              <h5 class="card-title">DVD collection</h5>
              <p class="card-text text-muted small">Films classiques — échange contre jeux ou vinyles.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-primary">Proposer un échange</button>
                <small class="text-muted">Toamasina</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How it works -->
    <section id="how" class="mb-5">
      <div class="row align-items-center g-4">
        <div class="col-md-6">
          <h4>Comment ça marche</h4>
          <ol class="ps-3">
            <li class="mb-2"><strong>Inscris-toi</strong> et crée ton profil.</li>
            <li class="mb-2"><strong>Publie</strong> tes objets avec photos et description.</li>
            <li class="mb-2"><strong>Propose</strong> un échange sur un objet qui t'intéresse.</li>
            <li><strong>Accepte</strong> ou refuse les propositions ; si accepté, l'objet change de propriétaire.</li>
          </ol>
        </div>
        <div class="col-md-6">
          <div class="p-4 rounded shadow-sm" style="background: linear-gradient(180deg,#ffffff,#f2fbff);">
            <h5>Conseils</h5>
            <ul class="mb-0">
              <li>Ajoute des photos nettes et une description précise.</li>
              <li>Favorise les échanges locaux pour simplifier la livraison.</li>
              <li>Sois poli et clair lors des échanges.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="mb-5">
      <div class="p-4 rounded shadow-sm bg-white">
        <h4>À propos de Takalo.mg</h4>
        <p class="mb-0">Takalo.mg est une plateforme d'échange d'objets pensée pour donner une seconde vie aux biens et créer du lien entre utilisateurs. Notre objectif est simple : réduire le gaspillage et faciliter le troc en ligne, sécurisé et convivial. Les échanges sont faits entre utilisateurs inscrits ; lorsqu'une proposition est acceptée, la propriété de l'objet est transférée.</p>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row gy-3">
        <div class="col-md-6">
          <h5 class="text-white">Takalo.mg</h5>
          <p class="small">Échangez vos objets, faites vivre vos biens.</p>
        </div>
        <div class="col-md-3">
          <h6 class="text-white">Ressources</h6>
          <ul class="list-unstyled small">
            <li><a class="link-light" href="#">Aide</a></li>
            <li><a class="link-light" href="#">Conditions</a></li>
            <li><a class="link-light" href="#">Confidentialité</a></li>
          </ul>
        </div>
        <div class="col-md-3 text-md-end">
          <small>© Takalo.mg 2026</small>
          <small>/ Ryan-Mandresy-Jonathan</small>

        </div>
      </div>
    </div>
  </footer>

  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Créer un compte Takalo.mg</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
        </div>
        <div class="modal-body">
          <form id="registerForm">
            <!-- Champs Nom -->
            <div class="mb-3">
              <label for="nom" class="form-label">Nom d'utilisateur</label>
              <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
              <div id="nomError" class="invalid-feedback"></div>
            </div>

            <!-- Champs Prenom -->
            <div class="mb-3">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" required>
              <div id="prenomError" class="invalid-feedback"></div>
            </div>

            <!-- Champ Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Adresse Email</label>
              <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
              <div id="emailError" class="invalid-feedback"></div>
            </div>

            <!-- Champ Mot de Passe -->
            <div class="mb-3">
              <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
              <div id="passwordError" class="invalid-feedback"></div>
            </div>

            <!-- Champ Confirmation Mot de Passe -->
            <div class="mb-3">
              <label for="confirm-password" class="form-label">Confirmer le mot de passe</label>
              <input type="password" class="form-control" id="confirm-password" placeholder="Confirmez votre mot de passe" required>
              <div id="confirmPasswordError" class="invalid-feedback"></div>
            </div>

            <!-- Bouton d'Inscription -->
            <div class="d-grid">
              <button type="submit" class="btn btn-cta">S'inscrire</button>
            </div>
          </form>
          <div class="text-center mt-3">
            <p class="mb-1">Vous avez déjà un compte ?</p>
            <a href="#" class="btn btn-link" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</a>
          </div>
        </div>
        <div class="modal-footer small text-muted">En cliquant sur S'inscrire, vous acceptez nos conditions.</div>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Connexion à Takalo.mg</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
        </div>
        <div class="modal-body">
          <form id="loginForm">
            <!-- Champ Email -->
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Adresse Email</label>
              <input type="email" class="form-control" id="loginEmail" placeholder="Entrez votre email" required>
            </div>
            
            <!-- Champ Mot de Passe -->
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="loginPassword" placeholder="Entrez votre mot de passe" required>
            </div>
            
            <!-- Bouton de Connexion -->
            <div class="d-grid">
              <button type="submit" class="btn btn-cta">Se connecter</button>
            </div>
          </form>
          <div class="text-center mt-3">
            <p class="mb-1">Vous n'avez pas encore de compte ?</p>
            <a href="#" class="btn btn-link" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signupModal">S'inscrire</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="/assets/bootstrap/dist/js/bootstrap.bundle.min.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>"></script>
  <script src="/assets/js/auth.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>" defer></script>
</body>
</html>
