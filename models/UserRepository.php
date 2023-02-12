<?php
require_once '../controllers/User.php';

class UserRepository{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addUser(User $user){
        $q = $this->bdd->prepare('INSERT INTO `user` (`prenom`,`email`, `pwd`) VALUES (:prenom, :login, :pwd)');

        $q->execute(array(':prenom' => $user->getPrenom(), ':login' => $user->getLogin(), ':pwd' => $user->getPwd()));
        return true;
    }

    public function removeUser(User $user){
        $q =$this->bdd->prepare('DELETE from `user` where `login` = :login');

        $q->execute(array(':login' => $user->getLogin()));
    }

    public function updateUser(User $user){
        $q = $this->bdd->prepare('UPDATE `user` SET `login` = :login,`prenom`= :prenom, `pwd` = :pwd WHERE `login` = :login');

        $q->execute(array(':login' => $user->getLogin(), ':prenom' => $user->getPrenom(), ':pwd' => $user->getPwd()));
    }

    public function getRank(User $user){
        $q = $this->bdd->prepare('SELECT `role` FROM `user` WHERE `login` = :login');
        $q->execute(array(':login' => $user->getLogin()));
        return $q;
    }

    public function getUser($login){
        $q = $this->bdd->prepare('SELECT * FROM `user` WHERE `email` = :login');
        $q->execute(array(':login' => $login));

        $row = $q->fetch();

        if ($row)
            return new User($row['email'], $row['prenom'], $row['pwd']);
        else
            return null;
    }

}
?>