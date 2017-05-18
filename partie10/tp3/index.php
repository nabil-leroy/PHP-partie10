<html>
    <head>
        <meta charset=UTF-8" />
        <title>TP3 Partie 10</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie10/tp1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie10/tp2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie10/tp3/'" />
        </header>
        <h1>TP3 Partie 10</h1>
        <h2> Faire une fonction qui permet d'afficher les données des tableaux suivants :<br>
            $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');<br>
            $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');<br>
            $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');<br>
            $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');<br>

            Les afficher tous sur une même page.
        </h2>
        <p>
            <?php
            // On met en place les tableaux demandé
            $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
            $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
            $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
            $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

            // Fonction qui va afficher les données des tableaux
            function display($array) {
                // La variable $result prend la valeur des différentes données du tableau 
                $result = $array['name'] . ' ' . $array['firstname'] . '<img src="' . $array['portrait'] . '"' . 'width="150px;">';
                // On retourne la variable $result
                return $result;
            }

            // On appelle la fonction et on affiche le résultat
            echo display($portrait1);
            echo display($portrait2);
            echo display($portrait3);
            echo display($portrait4);
            ?>
        </p>
    </body>
</html>
