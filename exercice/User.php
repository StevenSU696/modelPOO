<?php

class User
{
    private string $id;
    private string $nom;
    private string $prenom;
    private string $email;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}

$user = new User();
$user->setId('1');
$user->setNom('SU');
$user->setPrenom('Steven');
$user->setEmail('stisti@ggmail.org');
echo $user->getId() . "\n";
echo $user->getNom() . "\n";
echo $user->getPrenom() . "\n";
echo $user->getEmail() . "\n";
