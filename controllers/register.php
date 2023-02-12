<?php
session_start();
?>
<?php
if (isset($_GET["login"])){
    include '../controllers/User.php';
    include '../models/UserRepository.php';
    include '../models/connectDB.php';
    $login = htmlspecialchars($_GET["login"]);
    $prenom = htmlspecialchars($_GET["prenom"]);
    $pwd = htmlspecialchars($_GET["pwd"]);

    $cost = ['cost' => 10];
    $pwd = password_hash($pwd, PASSWORD_BCRYPT, $cost);

    $bdd = new UserRepository(connectDB());
    if ($u = $bdd->getUser($login) == false){
        $user = new User($login, $prenom, $pwd);
        if(filter_var($user->getLogin(), FILTER_VALIDATE_EMAIL)){
            if ($bdd->addUser($user)){
                $_SESSION['user']=$user->getLogin();
                header('Location: ../views/home.php');
            }
        }else{ header('Location: ../index.php?login_err=login'); die(); }
    }else{ header('Location: ../index.php?login_err=already'); die(); }
}

require '../views/registerView.php';
?>