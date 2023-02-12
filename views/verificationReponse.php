<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verif Réponse</title>
</head>
<body>
    <main>
    <form method="GET" action="">
        <h1> Test</h1>
            <p>
                <label>Réponse :</label><input type="text" name="reponse" />
                <br>
                <div class="button_container">
                    <button type="submit" value="OK" >ok</button>
                </div>
            </p>
    </form>

    <?php
        if (isset($_GET['reponse'])){
            if($_GET['reponse']=='test'){
                echo 'bonne réponse';
            }
            else{
                echo 'retentez votre chance';
            }
        }
    ?>
    </main>
</body>
</html>

