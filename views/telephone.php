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
    <form method="GET" action="telephone_traitement.php" id="formulaire_appel">
        <h1> WHO DO YOU WANT TO CALL ?</h1>
            <p>

            <select id="nom" name="nom">
                <option value="">--personne de choisi--</option>
                <?php

            $tab=array(
             "Anke Charlotte",
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

            for($i=0; $i<sizeof($tab); $i++){
                echo '<option value="'.$tab[$i].'">'.$tab[$i].'</option>';
            }
            
            ?>
                
            </select>
        </br>
                <div class="button_container" id="button_phone">
                    <button type="submit" value="OK" >ok</button>
                </div>
            </p>
    </form>

    

</body>
</html>



