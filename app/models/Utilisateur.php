<?php
declare(strict_types=1);

namespace app\models;

use PDO;

class Utilisateur
{
    private  $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findByEmail(string $email): ?array
    {
        $stmt = $this->db->prepare(
            "SELECT u.*, r.libelle as role_libelle 
             FROM UTILISATEUR u 
             LEFT JOIN ROLE r ON u.role_id = r.id 
             WHERE u.email = :email"
        );
        
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result ?: null;
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->prepare(
            "SELECT u.*, r.libelle as role_libelle 
             FROM UTILISATEUR u 
             LEFT JOIN ROLE r ON u.role_id = r.id 
             WHERE u.id = :id"
        );
        
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result ?: null;
    }


    public function create(array $data): int
    {
        $stmt = $this->db->prepare(
            "INSERT INTO UTILISATEUR (nom, prenom, email, mot_de_passe, role_id) 
             VALUES (:nom, :prenom, :email, :mot_de_passe, :role_id)"
        );
        
        $stmt->bindValue(':nom', $data['nom'], PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $data['prenom'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindValue(':mot_de_passe', password_hash($data['mot_de_passe'], PASSWORD_DEFAULT), PDO::PARAM_STR);
        $stmt->bindValue(':role_id', $data['role_id'] ?? 2, PDO::PARAM_INT); 
        
        $stmt->execute();
        
        return (int) $this->db->lastInsertId();
    }

  
    public function emailExists(string $email): bool
    {
        $stmt = $this->db->prepare(
            "SELECT COUNT(*) as count FROM UTILISATEUR WHERE email = :email"
        );
        
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result['count'] > 0;
    }


    public function verifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

  
    public function getAll(): array
    {
        $stmt = $this->db->prepare(
            "SELECT u.*, r.libelle as role_libelle 
             FROM UTILISATEUR u 
             LEFT JOIN ROLE r ON u.role_id = r.id 
             ORDER BY u.id DESC"
        );
        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function mot_de_passe_hash($mdp){
        $cle = "hash";

        $mdp_hash = hash()

    }
}
