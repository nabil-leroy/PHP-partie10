<html>
    <head>
        <meta charset=UTF-8" />
        <title>TP2 Partie 10</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie10/tp1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie10/tp2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie10/tp3/'" />
        </header>
        <h1>TP2 Partie 10</h1>
        <h2> Faire une page permettant de saisir les informations suivantes :<br>
            Civilité (liste déroulante)<br>
            Nom<br>
            Prénom<br>
            Age<br>
            Société<br>
            A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.
        </h2>
        <form action="index.php" method="post">
            <!-- Liste déroulante civilité -->
            <label for="civility">Civilité:</label>
            <select name="civility">
                <option value="Homme" 
                <?php
                // Si la valeur existe et qu'elle est égale à 'Homme', on ajoute 'selected' en attribut
                if (isset($_POST['civility']) && $_POST['civility'] == 'Homme') {
                    echo 'selected';
                }
                ?>>Homme
                </option>
                <option value="Femme" 
                <?php
                // Pareil que homme
                if (isset($_POST['civility']) && $_POST['civility'] == 'Femme') {
                    echo 'selected';
                }
                ?>>Femme
                </option>
            </select><br>
            <label for="lastName">Nom : </label><input type="text" name="lastName" placeholder="Nom" <?php
            if (isset($_POST['lastName'])) {
                echo 'value="' . $_POST['lastName'] . '"';
            }
            ?>><br>
            <label for="firstName">Prénom : </label><input type="text" name="firstName" placeholder="Prénom" <?php
            if (isset($_POST['firstName'])) {
                echo 'value="' . $_POST['firstName'] . '"';
            }
            ?>><br>
            <label for="age">Age:</label><input type="text" name="age" placeholder="55" <?php
            if (isset($_POST['age'])) {
                echo 'value="' . $_POST['age'] . '"';
            }
            ?>><br>
            <label for="company">Société : </label><input type="text" name="company" placeholder="Renault" <?php
            if (isset($_POST['company'])) {
                echo 'value="' . $_POST['company'] . '"';
            }
            ?>><br>
            <input type="submit" value="Valider">
        </form>
        <?php
        $regex_name = '#^\D+[-]?\D+#i';
        $regex_age = '#[1-100]#';
// Si toutes les valeurs existent
        if (isset($_POST['civility']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['age']) && isset($_POST['company'])) {
            //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard
            if (preg_match($regex_name, $_POST['lastName']) && preg_match($regex_name, $_POST['firstName']) && preg_match($regex_age, $_POST['age']) && preg_match($regex_name, $_POST['company'])) {
                ?>
                <!-- On affiche les valeurs -->
                <p>Civilité: <?php echo $_POST['civility'] ?></p>
                <p>Nom: <?php echo $_POST['lastName'] ?></p>
                <p>Prénom: <?php echo $_POST['firstName'] ?></p>
                <p>Age: <?php echo $_POST['age'] ?></p>
                <p>Société : <?php echo $_POST['company'] ?></p>
                <?php
            }
        }
        ?>
    </body>
</html>
