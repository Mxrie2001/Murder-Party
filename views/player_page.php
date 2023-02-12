<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/page.css">
    <title>Player</title>
</head>
<body>

    <div id="header_perso">
        <a href="./ghost.php"><img src="../assets/img/ghost.png"/></a>
        <a href="./telephone_security.php"><img src="../assets/img/phone.png"/></a>
    </div>
        <?php
            $bdd=connectDB();

            $querry= $bdd ->prepare('select * from user where email=?');
            $querry ->execute(array($_SESSION['user']));
            $data= $querry -> fetch();
            echo '<h1>'.$data['prenom'].'</h1>';
            $id=$data['id'];
        ?>

    <p id="intro_perso">
    A week ago, you received a mysterious letter inviting you to a dinner, promising to reveal one of 
    your secrets. Intrigued, you of course accepted the invitation. You quickly realized 3 of your high school 
    best friends also received this letter. You haven’t had contact with them in 3 years.
    </p>

    <h2><i class="far fa-hand-point-right"></i> Background <i class="far fa-hand-point-left"></i></h2>

    <?php
        $q2 = $bdd ->prepare('select * from fiche_perso where joueur=?');
        $q2 ->execute(array($id));
        foreach ($q2 as $data2){
            echo '<p class="background_perso">'.$data2['background'].'</p>';
            echo '<p class="background_perso">'.$data2['background2'].'</p>';
            echo '<p class="background_perso">'.$data2['background3'].'</p>';
            echo '<p class="background_perso">'.$data2['background4'].'</p>';

            echo '<h2><i class="fas fa-search"></i> What you know about the others <i class="fas fa-search"></i></h2>';
            $q3 = $bdd ->prepare('select * from infos_joueurs where joueur=?');
            $q3 ->execute(array($id));
            echo '<div class="card_others">';
            foreach ($q3 as $data3){
                echo '<div class="card_infos"><h3>'.$data3['perso'].'</h3>';
                echo '<p>'.$data3['perso_infos'].'</p></div>';
            }
            echo '</div>';

            if($data2['one_more_thing'] != null){
                echo '<h2><i class="fas fa-thumbtack"></i> One more thing <i class="fas fa-thumbtack"></i></h2>';
                echo '<p class="background_perso">'.$data2['one_more_thing'].'</p>';
            }
            
            echo '<a href="'.$data2['files'].'" download="Clues" id="clue" ><i class="fas fa-info-circle fa-2x"></i></a>';
        }

    ?>

</body>
</html>