<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/page.css">
</head>
<body>
    <?php
        $page="phone";
        include 'header.php';
    ?>
    <main>
    <?php

        if (isset($_GET['nom_assassin'])  && isset($_GET['un']) && isset($_GET['deux']) && isset($_GET['trois']) ){
                    
                    echo 'Calling Ferreira Nicolas...';
                    if($_GET['nom_assassin']=="Gaby" && strtolower($_GET['un'])== "future" && strtolower($_GET['deux'])== "writing" && strtolower($_GET['trois'])== "talent" ){
                        echo '<p class="nico">Congrats, you’ve solved Damien’s death ! The police is on there way. Once they arrive, they take Gaby away. You do not have concrete proof, but you have a motive and the police seems to find this interesting enough. He might not be charged, but you can congratulate yourself on your detective skills. 
                        I hope you enjoyed this murder, don’t hesitate to leave some feedback :)</p>';

                    }

                    else{
                        echo '<p class="nico">This doesn’t seem right, please call me back when you have real information</p>';
                    }
                }

    ?>
    </main>
</body>
</html>

