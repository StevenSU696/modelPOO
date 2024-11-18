<?php

class utilisateur
{
    public int $id;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $mot_de_passe;
    public string $surnom;
    public string $dateDeNaissance;


    public function getId()
    {
        return $this->id;
    }

    public function getLastname()
    {
        return $this->nom;
    }

    public function getFirstname()
    {
        return $this->prenom;
    }

    public function getName()
    {
        return $this->prenom + $this->nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function checkPassword($password): bool
    {
        return password_verify($password, $this->mot_de_passe);
    }
}
