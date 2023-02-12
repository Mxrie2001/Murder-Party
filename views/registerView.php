<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/page.css">
</head>
<body>
    <?php
        $page="register";
        include 'header.php';
    ?>

    <main>
    
    <div class="survey">
        <form method="GET" action="../controllers/register.php">
        <h1> Inscription</h1>
            <p>
                <label>Surname :</label><input type="text" name="prenom" />
                <br>
                <label>Email :</label><input type="email" name="login" />
                <br>
                <label>Password :</label><input type="password" name="pwd" />
                <br>
                
                <br>
                <div class="button_container">
                    <button type="submit" value="OK" >Register</button>
                </div>
            </p>
        </form>
    </div>
</main>
    
    <?php
        include 'footer.php';
    ?>

</body>
</html>