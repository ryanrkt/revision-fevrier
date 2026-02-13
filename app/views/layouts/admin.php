<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $title ?? 'Admin - Takalo.mg' ?></title>
  <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --sidebar-width: 250px;
      --brand: #2b8a9e;
    }
    body {
      font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: #f4f6f9;
    }
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: var(--sidebar-width);
      height: 100vh;
      background: #1e293b;
      padding-top: 1rem;
      z-index: 1000;
    }
    .sidebar .brand {
      color: #fff;
      font-size: 1.4rem;
      font-weight: 700;
      padding: 1rem 1.5rem;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      margin-bottom: 1rem;
    }
    .sidebar .nav-link {
      color: rgba(255,255,255,0.7);
      padding: 0.75rem 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: all 0.2s;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      color: #fff;
      background: rgba(255,255,255,0.1);
    }
    .sidebar .nav-link.active {
      border-left: 3px solid var(--brand);
    }
    .main-content {
      margin-left: var(--sidebar-width);
      min-height: 100vh;
    }
    .top-bar {
      background: #fff;
      padding: 1rem 2rem;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .content-area {
      padding: 2rem;
    }
    @media (max-width: 991px) {
      .sidebar { transform: translateX(-100%); }
      .main-content { margin-left: 0; }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="brand">
      <span>🔧</span> Admin Takalo
    </div>
    <nav class="nav flex-column">
      <a class="nav-link <?= ($currentPage ?? '') === 'dashboard' ? 'active' : '' ?>" href="/admin">
        <span>📊</span> Dashboard
      </a>
      <a class="nav-link <?= ($currentPage ?? '') === 'utilisateurs' ? 'active' : '' ?>" href="/admin/utilisateurs">
        <span>👥</span> Utilisateurs
      </a>
      <a class="nav-link <?= ($currentPage ?? '') === 'objets' ? 'active' : '' ?>" href="/admin/objets">
        <span>📦</span> Objets
      </a>
      <a class="nav-link <?= ($currentPage ?? '') === 'echanges' ? 'active' : '' ?>" href="/admin/echanges">
        <span>🔄</span> Échanges
      </a>
      <a class="nav-link <?= ($currentPage ?? '') === 'parametres' ? 'active' : '' ?>" href="/admin/parametres">
        <span>⚙️</span> Paramètres
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Bar -->
    <header class="top-bar">
      <h5 class="mb-0"><?= $pageTitle ?? 'Dashboard' ?></h5>
      <div class="d-flex align-items-center gap-3">
        <span class="text-muted">Bonjour, <?= htmlspecialchars($user['prenom'] ?? 'Admin') ?></span>
        <a href="/logout" class="btn btn-outline-danger btn-sm">Déconnexion</a>
      </div>
    </header>

    <!-- Content -->
    <main class="content-area">
      <?= $content ?? '' ?>
    </main>
  </div>

  <script src="/assets/bootstrap/dist/js/bootstrap.bundle.min.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>"></script>
  <?php if (!empty($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
      <script src="<?= $script ?>" nonce="<?= htmlspecialchars($nonce ?? '') ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>
