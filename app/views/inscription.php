<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Inscription</h5>
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
                    <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                </form>
                <div class="text-center mt-3">
                    <!-- Lien pour se connecter -->
                    <p>Vous avez déjà un compte ?</p>
                    <a href="#" class="btn btn-link">Se connecter</a>
                </div>
            </div>
        </div>

    </div>

    <script src="/assets/bootstrap/dist/js/bootstrap.min.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>"></script>
    <script src="/assets/js/inscription-validation.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>" defer></script>




</body>

</html>