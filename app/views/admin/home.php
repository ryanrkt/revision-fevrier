<?php
$currentPage = 'dashboard';
$pageTitle = 'Dashboard';
$title = 'Dashboard Admin - Takalo.mg';

// Contenu de la page
ob_start();
?>

<div class="row g-4 mb-4">
  <!-- Stats Cards -->
  <div class="col-md-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h6 class="card-subtitle mb-2 opacity-75">Utilisateurs</h6>
        <h2 class="card-title mb-0"><?= $stats['utilisateurs'] ?? 0 ?></h2>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card bg-success text-white">
      <div class="card-body">
        <h6 class="card-subtitle mb-2 opacity-75">Objets publiés</h6>
        <h2 class="card-title mb-0"><?= $stats['objets'] ?? 0 ?></h2>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card bg-info text-white">
      <div class="card-body">
        <h6 class="card-subtitle mb-2 opacity-75">Échanges</h6>
        <h2 class="card-title mb-0"><?= $stats['echanges'] ?? 0 ?></h2>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card bg-warning text-dark">
      <div class="card-body">
        <h6 class="card-subtitle mb-2 opacity-75">En attente</h6>
        <h2 class="card-title mb-0"><?= $stats['en_attente'] ?? 0 ?></h2>
      </div>
    </div>
  </div>
</div>

<div class="row g-4">
  <!-- Derniers utilisateurs -->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Derniers utilisateurs inscrits</h6>
        <a href="/admin/utilisateurs" class="btn btn-sm btn-outline-primary">Voir tout</a>
      </div>
      <div class="card-body">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Rôle</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($derniers_utilisateurs)): ?>
              <?php foreach ($derniers_utilisateurs as $u): ?>
                <tr>
                  <td><?= htmlspecialchars($u['prenom'] . ' ' . $u['nom']) ?></td>
                  <td><?= htmlspecialchars($u['email']) ?></td>
                  <td><span class="badge bg-secondary"><?= htmlspecialchars($u['role_libelle'] ?? 'N/A') ?></span></td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr><td colspan="3" class="text-muted text-center">Aucun utilisateur</td></tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Actions rapides -->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h6 class="mb-0">Actions rapides</h6>
      </div>
      <div class="card-body">
        <div class="d-grid gap-2">
          <a href="/admin/utilisateurs" class="btn btn-outline-primary">
            👥 Gérer les utilisateurs
          </a>
          <a href="/admin/objets" class="btn btn-outline-success">
            📦 Voir tous les objets
          </a>
          <a href="/admin/echanges" class="btn btn-outline-info">
            🔄 Superviser les échanges
          </a>
          <a href="/admin/parametres" class="btn btn-outline-secondary">
            ⚙️ Paramètres du site
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();

// Inclure le layout admin
include __DIR__ . '/../layouts/admin.php';
