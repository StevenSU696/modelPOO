<?php

class Utilisateur
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

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }
}
