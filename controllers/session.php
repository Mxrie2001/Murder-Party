<?php
session_start();
require '../models/connectDB.php';
require '../models/UserRepository.php';

function QuiEstCe(){
    $u = new UserRepository(connectDB());
    if ($u->getUser($_SESSION['user'])->getRank() == 1)
        return "Player1";
    if ($u->getUser($_SESSION['user'])->getRank() == 2)
        return "Player2";
    if ($u->getUser($_SESSION['user'])->getRank() == 3)
        return "Player3";
    if ($u->getUser($_SESSION['user'])->getRank() == 4)
        return "Player4";
    
}
?>