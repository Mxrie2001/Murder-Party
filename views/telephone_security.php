<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
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
    <img src='../assets/img/phone.png'>
    <div class="survey">
        <form method="POST" action="">
            <p>
                <label>PASSWORD</label> <input type="password" name="pwd" />
                <br>
                <div class="button_container">
                    <button type="submit" value="OK" >OK</button>
                </div>
            </p>
        </form>
    </div>

    <?php
    include '../models/connectDB.php';
    $bdd=connectDB();

    if(isset($_POST['pwd'])){
        if($_POST['pwd']=="cocottes"){
            
           
            $q1 = $bdd ->prepare('select * from phone_time');
            $q1 ->execute();
            $data = $q1 -> fetch();

            $today = date("Y-m-d H:i:s");
            $date_derniere_co = date($data['date_derniere_co']) ;

            
            if($today == $date_derniere_co || $today > $date_derniere_co){
                if (date("i")< 45){
                    $minutes = date("i")+15;
                    $date_prochaine_co = date("Y-m-d H:".$minutes.":s");
                }

                if (date("i") == 45){
                    $heure = date("H")+1;
                    $minutes = 00;
                    $date_prochaine_co = date("Y-m-d ".$heure.":".$minutes.":s");
                }

                if (date("i")> 45){
                    for ($i=date("i"); $i<60; $i++){
                        $compteur++;
                    }
                    $minutes = 15-$compteur;
                    $heure = date("H")+1;
                    $date_prochaine_co = date("Y-m-d ".$heure.":".$minutes.":s");
                }

                if (date("H") == 23 && date("i")> 45){
                    $heure = 00;
                    for ($i=date("i"); $i<60; $i++){
                        $compteur++;
                    }
                    $minutes = 15-$compteur;
                    $date_prochaine_co = date("Y-m-d ".$heure.":".$minutes.":s");
                }
                
                
                $querry = $bdd->prepare('UPDATE `phone_time` SET `date_derniere_co`=? WHERE id= 1');
                $querry ->execute(array($date_prochaine_co));
                header('Location: telephone.php');

            } 
            else{
                echo '<p id="message_min">Les 15 minutes ne sont pas encore écoulée...</p>';
                echo '<p id="demo"></p>';
                ?>



                <script>
    
                var countDownDate = new Date(<?php echo json_encode($date_derniere_co); ?>).getTime();

                
                var x = setInterval(function() {

                
                var now = new Date().getTime();
                    
                
                var distance = countDownDate - now;
                    
                
                
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                
                document.getElementById("demo").innerHTML =" Il reste " + minutes + "m " + seconds + "s ";
                    
                
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "Vous pouvez de nouveau téléphoner";
                    document.getElementById("message_min").style.display = "none";
                    window.location.href = "telephone_security.php";
                }
                }, 1000);
    
                </script>
            <?php
            }

        }

        else{
            echo 'WRONG PASSWORD';
        }
    }
        
    ?>
</main>
    <?php
        include 'footer.php';
    ?>






</body>
</html>
