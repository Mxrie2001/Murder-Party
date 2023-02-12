<?php
function connectDB() {
    $host = 'localhost';
    $user = 'root';
    $db = 'murder_party';
    $pwd = '';
    try {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user,$pwd);
        return $bdd;
    }catch (Exception $e) {
        exit('Erreur : '.$e->getMessage());
    }
} //fonction de connexion

?>
