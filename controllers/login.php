<?php
session_start();
if (isset($_GET["login"])){
    include '../controllers/User.php';
    include '../models/UserRepository.php';
    include '../models/connectDB.php';
    $login = htmlspecialchars($_GET["login"]);
    $prenom = htmlspecialchars($_GET["prenom"]);
    $pwd = htmlspecialchars($_GET["pwd"]);
    $save = new UserRepository(connectDB());
    if ($u=$save->getUser($login)){
        if (password_verify($pwd, $u->getPwd())){
            $user = new User($login, $prenom, $pwd);
            $_SESSION['user']=$user->getLogin();
            header('Location: ../views/home.php');
            die();
        } else {header('Location: ../index.php?login_err=password'); die();}
    }else {header('Location: ../index.php?login_err=login'); die();}
}else{ header('Location: ../index.php?empty'); die();}

require '../index.php';
