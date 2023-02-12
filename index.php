<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/page.css">
</head>
<body>
    <?php
        $page="index";
        // include 'views/header.php';
    ?>
    <main>
    <img src='assets/img/logo.png'>
    <div class="survey">
        <form method="GET" action="controllers/login.php">
            <p>
                <label>WHO ARE YOU?</label> <input type="text" name="login" />
                <br>
                <label>PASSWORD</label> <input type="password" name="pwd" />
                <br>
                <div class="button_container">
                    <button type="submit" value="OK" >LOGIN</button>
                </div>
            </p>
        </form>
    </div>
</main>
    <?php
        include 'views/footer.php';
    ?>
</body>
</html>