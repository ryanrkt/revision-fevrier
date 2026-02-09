<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <!-- Lien vers la feuille de style Bootstrap -->
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h5 class="card-title text-center">Connexion</h5>
            <form>
                <!-- Champ Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                </div>
                
                <!-- Champ Mot de Passe -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                </div>
                
                <!-- Bouton de Connexion -->
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </form>
            <div class="text-center mt-3">
                <!-- Lien pour S'inscrire -->
                 <p>Vous avez pas encore de compte ?</p>
                <a href="#" class="btn btn-link">S'inscrire</a>
            </div>
        </div>
    </div>
</div>

<script src="/assets/bootstrap/dist/js/bootstrap.min.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>"></script>

</body>
</html>
