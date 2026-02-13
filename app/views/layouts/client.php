<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $title ?? 'Takalo.mg — Échange d\'objets' ?></title>
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
    .navbar-brand span {
      font-weight: 700;
      color: var(--brand);
    }
    .btn-cta {
      background: var(--accent);
      color: #062a3b;
      font-weight: 600;
      border: none;
    }
    .btn-cta:hover {
      background: #e6bc5a;
      color: #062a3b;
    }
    footer {
      background: #0f1724;
      color: #cbd5e1;
      padding: 2rem 0;
      margin-top: 3rem;
    }
    .card-image {
      height: 180px;
      object-fit: cover;
      border-top-left-radius: .5rem;
      border-top-right-radius: .5rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="/client">
        <img src="/assets/images/logo.png" alt="Takalo.mg" width="34" height="34" style="border-radius:6px; object-fit:cover;">
        <span class="ms-1">Takalo.mg</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>" href="/client">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage ?? '') === 'objets' ? 'active' : '' ?>" href="/client/objets">Mes objets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage ?? '') === 'echanges' ? 'active' : '' ?>" href="/client/echanges">Mes échanges</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage ?? '') === 'profil' ? 'active' : '' ?>" href="/client/profil">Mon profil</a>
          </li>
          <li class="nav-item dropdown ms-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              <?= htmlspecialchars($user['prenom'] ?? 'Utilisateur') ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="/client/profil">Mon profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="/logout">Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container py-4">
    <?= $content ?? '' ?>
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
        </div>
      </div>
    </div>
  </footer>

  <script src="/assets/bootstrap/dist/js/bootstrap.bundle.min.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>"></script>
  <?php if (!empty($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
      <script src="<?= $script ?>" nonce="<?= htmlspecialchars($nonce ?? '') ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>
