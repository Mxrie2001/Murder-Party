<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/page.css">
    <title>Index</title>
</head>
<body>
    <?php
        $page="home";
        include 'header.php';
        require '../controllers/session.php';
        
    ?>

    <main>

    <?php
        require 'player_page.php';        
    ?>
    
    
    </main>

    <?php
        include 'footer.php';
    ?>

</body>
</html>