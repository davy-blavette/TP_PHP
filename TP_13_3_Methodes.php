<?php
class Utilisateur
{
    private $user_name;
    private $user_pwd;

    public function getNom():
    string
    {
        return $this->user_name;
    }

    public function setNom(string $nom)
    {
        $this->user_name = $nom;
    }

    public function setPwd($pass)
    {
        $this->user_pwd = $pass;
    }
}
