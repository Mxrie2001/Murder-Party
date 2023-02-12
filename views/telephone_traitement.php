<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/page.css">
    <title>Phone</title>
</head>
<body>
<?php
        $page="tel";
        include 'header.php';
        require '../controllers/session.php';
        
    ?>
    <main>

    
                <?php

            $tab=array(
             "Alex",
             "Anke Charlotte",
             "Andy", 
            "Arl Lisa",
            "Athe Mathilde" ,
            "Barbour Feryelle",
            "BELARDI Juliette",
            "Bendinelli Tom",
            "Berna Julien",
            "Bernadi Rachele",
            "Bindileu Tudor",
            "Birkelbach Andreas",
           "Bollaert Nathan",
            "Bourg Killian",
            "Bresson Matthieu",
            "Cabannes Alienor",
            "Cabral Rafael",
            "Casseta Fabio",
            "Ceglarski Clara",
            "Chaignon Amaury", 
            "Chalmeign Arthur",
            "Charlie", 
            "Codet Jonelly", 
            "Creff Victoire",
            "Dauvergne Anne-Charlotte",
            "De Landtsheer Jeanne",
            "De nino Theo",
            "Demeules Emile-Rene",
            "Demir Yasmine",
            "Diawara Ismael",
            "Duvoux Helene",
            "Estevez Antoine",
            "Eustache Charlotte",
            "Fadel Layla",
            "Febvey Caroline",
            "Fergola Hugo",
            "Ferretti Arthur",
            "Flammant Dimitri",
            "Gaby",
            "Gagey Manon",
            "Goedert Valentine",
            "Gray Constance",
            "Grezlac Nastasia",
            "Guerard Anna-Sica",
            "Haccoun de Laubadere Clothilde",
            "Hahn Alexandre",
            "Hamdan Ines",
            "Haoreau Nathan",
            "Hein Lena",
            "Hemard Leo",
            "Heron Clement",
            "Hilbert Elise",
            "Idris Celia",
            "Jacquemin Thomas",
            "Juliot Elise",
            "Klapisz Thomas",
            "Kratz Clementine",
            "Kremer Maxime",
            "Lamamra Harry",
            "Lambot Emilie",
            "Lebigot Julia",
            "Lucas Dylan",
            "Mabika NDongo Tshimanga Yohan",
            "Man Timothy",
            "Manna Marianna",
            "Marengo Salome",
            "Marta Teresa",
            "Marzinotto Clara",
            "Masquelier Raquel",
            "Mayer Goran",
            "MBarek Elias",
            "Miglio Annabelle",
            "Minoprio Gianluca",
            "Morelli Jeremy",
            "Moro-Brionne Juliette",
            "Mousset Daphne",
            "Ndiaye Mohamed",
            "Nguyen Karina",
            "Pichot du Mezeray Ronan",
            "Ranalli Sofia",
            "Rodionov Yvan",
            "Sangare Ange-Mariam",
            "Sansonetti Lylou",
            "Schlussel Rebecca",
            "Schmit Marine",
            "Schmit Thomas",
            "Schneider Guillaume",
            "Schweitzer Léa",
            "Simoenova Vanessa",
            "Skekeres Emma",
            "Sobel Maxime",
            "Soisson Thomas",
            "Thebault Camille",
            "Toril-Ghozli Joris",
            "Trevalinet Capucine",
            "Tromeur Margot",
            "Van Geyt Pauline",
            "Vanderschrick Laura",
            "Vintila Maria",
            "Weynacht-Millich Sarah",
            "Xhonneux Anne-Catherine",
            "Xhonneux Cedric",
            "Yip Lan Yan Ryan",
            "Zagorski Nicolas",
            "Cotorobai Mari-Irina", //Maman
            "Ferreira Nicolas" // Policier

            );

        
        if (isset($_GET['nom'])){
            echo 'Calling '.$_GET['nom'].'...';

            if($_GET['nom']=="Cotorobai Mari-Irina"){
                echo '
                    <audio controls autoplay id="myaudio">
                        <source src="../assets/audio/Damien_s_mother.m4a" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                    <script>Effacer()</script>
                
                ';
            }

            elseif($_GET['nom']=="Miglio Annabelle"){
                echo '
                    <audio controls autoplay id="myaudio">
                        <source src="../assets/audio/Miglio_Annabelle.m4a" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                
                ';
            }

            elseif($_GET['nom']=="Ferreira Nicolas"){
                echo '<div id="un" ><p class="nico">Hello, Nicolas Ferreira how may I help you?</p>';
                echo '<div class="mes_choix">';
                echo '<button onclick="Question1Choix1()" class="choix">We want informations</button>';
                echo '<button onclick="Question1Choix2()" class="choix">We have something to report</button>';
                echo '</div></div>';

                echo '<p class="nico" id="deux1" style="display:none;">I am sorry, but I cannot help you, goodbye.</p>';
                
                echo '<div id="deux2" style="display:none;"><p class="nico">What is it?</p>';
                echo '<div class="mes_choix">';
                echo '<button onclick="Question2Choix1()" class="choix">We want to talk about an old case</button>';
                echo '<button onclick="Question2Choix2()" class="choix">Someone just died!</button>';
                echo '</div></div>';

                echo '<p class="nico" id="trois2" style="display:none;">Don’t move, I will inform the relevant authorities, and the police will be there as soon as possible. In the meantime, don’t move, stay
                where you are and don’t touch anything around the body. Call me if anything changes. Weather conditions are bad, I don’t think we’ll be able to get there
                before hours. Please hold down, be careful, and feel free to call me again if you have any other information.</p>';


                echo '<div id="trois1" style="display:none;"><p class="nico">What about it?</p>';
                echo '<div class="mes_choix">';
                echo '<button onclick="Question3Choix1()" class="choix">We think you should reopen the case</button>';
                echo '<button onclick="Question3Choix2()" class="choix">It’s a murder!</button>';
                echo '</div></div>';

                echo '<p class="nico" id="quatre1" style="display:none;">This is not in my power, unless you have sufficient proof, I cannot do anything. Goodbye.</p>';

                echo '<div id="quatre2" style="display:none;"><p class="nico">Do you have any proof or new elements?</p>';
                echo '<div class="mes_choix">';
                echo '<button onclick="Question4Choix1()" class="choix">Yes</button>';
                echo '<button onclick="Question4Choix2()" class="choix">No</button>';
                echo '</div></div>';

                echo '<div id="cinq1" style="display:none;">
                    
                    
                    <form method="GET" action="telephone_traitement_final.php" class="derniere_etape_murder"">
        
                    
                    <p class="nico">Who did it? </p>

                    <div class="reponsepolice">
                    <select class="choix" id="nom" name="nom_assassin">
                    <option value="">--personne de choisi--</option>';
                    
                    for($i=0; $i<sizeof($tab); $i++){
                        echo '<option value="'.$tab[$i].'">'.$tab[$i].'</option>';
                    }
                    echo '   
                    </select>
                    </div>
                <div class="nico">
                <p>The motive ?</p>
                <p>Type a word in each box (The first word must have 6 letters, the second 7 and the third 6)</p>
                </div>

                <div class="reponsepolice">
                <input class="choix" type="text" name="un" />
                <input class="choix" type="text" name="deux" />
                <input class="choix" type="text" name="trois" />
                </div>
                        <div class="button_container" id="button_phone">
                            <button type="submit" value="OK" >ok</button>
                </div>
                    

            </form>
                
                </p></div>';

                echo '<p class="nico" id="cinq2" style="display:none;">I’m sorry, but then I cannot help you. We cannot do anything on just speculations. I would at least need a name and a motive.</p>';
            }

            else{
                echo '
                    <audio controls autoplay id="myaudio">
                        <source src="../assets/audio/ring.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                    
                
                ';
            }
        }
    ?>
    </main>
    <?php
        include 'footer.php';
    ?>

<script>
    var audio = document.getElementById("myaudio");
    audio.volume = 0.05;

    function Question1Choix1(){
        document.getElementById("un").style.display = "none"
        document.getElementById("deux1").style.display = "flex"
    }

    function Question1Choix2(){
        document.getElementById("un").style.display = "none"
        document.getElementById("deux2").style.display = "flex"
    }

    function Question2Choix1(){
        document.getElementById("deux2").style.display = "none"
        document.getElementById("trois1").style.display = "flex"
    }

    function Question2Choix2(){
        document.getElementById("deux2").style.display = "none"
        document.getElementById("trois2").style.display = "flex"
    }

    function Question3Choix1(){
        document.getElementById("trois1").style.display = "none"
        document.getElementById("quatre1").style.display = "flex"
    }

    function Question3Choix2(){
        document.getElementById("trois1").style.display = "none"
        document.getElementById("quatre2").style.display = "flex"
    }

    function Question4Choix1(){
        document.getElementById("quatre2").style.display = "none"
        document.getElementById("cinq1").style.display = "flex"
    }

    function Question4Choix2(){
        document.getElementById("quatre2").style.display = "none"
        document.getElementById("cinq2").style.display = "flex"
    }

</script>
</body>
</html>

