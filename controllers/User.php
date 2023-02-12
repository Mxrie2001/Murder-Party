<?php
class User{
    private $login;
    private $prenom;
    private $pwd;


    public function __construct($login, $prenom, $pwd)
    {
        $this->login = $login;
        $this->prenom = $prenom;
        $this->pwd = $pwd;
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    

    public function getPwd()
    {
        return $this->pwd;
    }


    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }


}
?>