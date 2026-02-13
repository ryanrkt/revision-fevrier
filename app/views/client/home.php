<?php
$currentPage = 'home';
$title = 'Mon espace - Takalo.mg';

// Contenu de la page
ob_start();
?>

<h2 class="mb-4">Bienvenue, <?= htmlspecialchars($user['prenom'] ?? 'Utilisateur') ?> !</h2>

<div class="row g-4 mb-4">
  <!-- Stats Cards -->
  <div class="col-md-4">
    <div class="card border-0 shadow-sm">
      <div class="card-body text-center">
        <div class="display-4 text-primary mb-2">📦</div>
        <h3 class="mb-1"><?= $stats['mes_objets'] ?? 0 ?></h3>
        <p class="text-muted mb-0">Mes objets</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-0 shadow-sm">
      <div class="card-body text-center">
        <div class="display-4 text-success mb-2">🔄</div>
        <h3 class="mb-1"><?= $stats['mes_echanges'] ?? 0 ?></h3>
        <p class="text-muted mb-0">Mes échanges</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-0 shadow-sm">
      <div class="card-body text-center">
        <div class="display-4 text-warning mb-2">⏳</div>
        <h3 class="mb-1"><?= $stats['en_attente'] ?? 0 ?></h3>
        <p class="text-muted mb-0">En attente</p>
      </div>
    </div>
  </div>
</div>

<div class="row g-4">
  <!-- Actions rapides -->
  <div class="col-lg-6">
    <div class="card border-0 shadow-sm">
      <div class="card-header bg-transparent border-0">
        <h5 class="mb-0">Actions rapides</h5>
      </div>
      <div class="card-body">
        <div class="d-grid gap-2">
          <a href="/client/objets/nouveau" class="btn btn-primary">
            ➕ Publier un nouvel objet
          </a>
          <a href="/client/objets" class="btn btn-outline-primary">
            📦 Voir mes objets
          </a>
          <a href="/client/echanges" class="btn btn-outline-success">
            🔄 Mes échanges
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Objets récents -->
  <div class="col-lg-6">
    <div class="card border-0 shadow-sm">
      <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Objets disponibles</h5>
        <a href="/client/explorer" class="btn btn-sm btn-outline-primary">Explorer</a>
      </div>
      <div class="card-body">
        <?php if (!empty($objets_recents)): ?>
          <div class="list-group list-group-flush">
            <?php foreach ($objets_recents as $objet): ?>
              <a href="/client/objet/<?= $objet['id'] ?>" class="list-group-item list-group-item-action">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="mb-1"><?= htmlspecialchars($objet['titre']) ?></h6>
                    <small class="text-muted"><?= htmlspecialchars($objet['categorie'] ?? '') ?></small>
                  </div>
                  <span class="badge bg-primary">Voir</span>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <p class="text-muted text-center mb-0">Aucun objet récent</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();

// Inclure le layout client
include __DIR__ . '/../layouts/client.php';
