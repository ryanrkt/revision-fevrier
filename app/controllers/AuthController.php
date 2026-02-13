<?php
declare(strict_types=1);

namespace app\controllers;

use app\models\Utilisateur;
use flight\Engine;

class AuthController
{
    protected Engine $app;
    protected Utilisateur $utilisateur;

    public function __construct(Engine $app)
    {
        $this->app = $app;
        $this->utilisateur = new Utilisateur($app->db());
    }
    
    // LOGIN
    public function login(): void
    {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            $this->app->json([
                'success' => false,
                'message' => 'Email et mot de passe requis'
            ]);
            return;
        }

        // Chercher l'utilisateur
        $user = $this->utilisateur->findByEmail($email);
        
        if (!$user) {
            $this->app->json([
                'success' => false,
                'message' => 'Email ou mot de passe incorrect'
            ]);
            return;
        }

        // Vérifier le mot de passe (comparaison simple pour admin existant ou hash)
        $passwordValid = false;
        if (password_get_info($user['mot_de_passe'])['algo'] !== null) {
            $passwordValid = password_verify($password, $user['mot_de_passe']);
        } else {
            // Mot de passe non hashé (ancien format)
            $passwordValid = ($password === $user['mot_de_passe']);
        }

        if (!$passwordValid) {
            $this->app->json([
                'success' => false,
                'message' => 'Email ou mot de passe incorrect'
            ]);
            return;
        }

        // Démarrer la session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Stocker l'utilisateur en session
        $_SESSION['user'] = [
            'id' => $user['id'],
            'nom' => $user['nom'],
            'prenom' => $user['prenom'],
            'email' => $user['email'],
            'role_id' => $user['role_id'],
            'role' => $user['role_libelle']
        ];

        // Déterminer la redirection selon le rôle
        $redirect = ($user['role_id'] == 1) ? '/admin' : '/client';

        $this->app->json([
            'success' => true,
            'message' => 'Connexion réussie',
            'redirect' => $redirect
        ]);
    }

    /**
     * Traitement de l'inscription
     */
    public function register(): void
    {
        $nom = trim($_POST['nom'] ?? '');
        $prenom = trim($_POST['prenom'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        // Validations
        $errors = [];

        if (strlen($nom) < 2) {
            $errors[] = 'Le nom doit contenir au moins 2 caractères';
        }
        if (strlen($prenom) < 2) {
            $errors[] = 'Le prénom doit contenir au moins 2 caractères';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email invalide';
        }
        if (strlen($password) < 8) {
            $errors[] = 'Le mot de passe doit contenir au moins 8 caractères';
        }
        if ($password !== $confirmPassword) {
            $errors[] = 'Les mots de passe ne correspondent pas';
        }

        // Vérifier si l'email existe
        if ($this->utilisateur->emailExists($email)) {
            $errors[] = 'Cet email est déjà utilisé';
        }

        if (!empty($errors)) {
            $this->app->json([
                'success' => false,
                'message' => implode(', ', $errors)
            ]);
            return;
        }

        // Créer l'utilisateur (role_id = 2 pour Client)
        $userId = $this->utilisateur->create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mot_de_passe' => $password,
            'role_id' => 2
        ]);

        // Connecter automatiquement l'utilisateur
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['user'] = [
            'id' => $userId,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'role_id' => 2,
            'role' => 'Client'
        ];

        $this->app->json([
            'success' => true,
            'message' => 'Inscription réussie',
            'redirect' => '/client'
        ]);
    }

    /**
     * Déconnexion
     */
    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        session_destroy();
        $this->app->redirect('/');
    }
}
