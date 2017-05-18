<html>
    <head>
        <meta charset=UTF-8" />
        <title>TP1 Partie 10</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="body">
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie10/tp1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie10/tp2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie10/tp3/'" />
        </header>
        <h1>TP1 Partie 10</h1>
        <h2 id="h2">Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes : <br>
            Nom<br>Prénom<br>Date de naissance<br>Pays de naissance<br>Nationalité<br>Adresse<br>Email<br>Téléphone<br>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)<br>Numéro pôle emploi<br>Nombre de badge<br>Liens codecademy<br>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?<br>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)<br>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?<br>A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.<br></h2>
        <p>

            <?php
            // On écrit les regex
            $regex_name = '#^[a-z]{2,30}$#i';
            $regex_birthdate = '^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$';
            $regex_phone = '#\b\d{2}[.]?\d{2}[-.]?\d{2}[.]\d{2}[-.]\d{2}?\b#';
            $regex_nationality = '#[\p{L}\s]+#';
            $regex_badge = '#[0-1000]#';
            $regex_codecademy = '#[https:\/\/www.codecademy.com\/]#';
            // Si les valeurs sont bien entrée dans chaque cases
            if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['birthDate']) && isset($_POST['birthCountry']) && isset($_POST['nationality']) && isset($_POST['adress']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['degree']) && isset($_POST['poleEmploiNumber']) && isset($_POST['badgeCount']) && isset($_POST['codecademyLink']) && isset($_POST['superHero']) && isset($_POST['hack']) && isset($_POST['experience'])) {
                // Et si elle respect les regex
                if (preg_match($regex_name, $_POST['firstName']) && preg_match($regex_name, $_POST['lastName']) && preg_match($regex_birthdate, $_POST['birthDate']) && preg_match($regex_phone, $_POST['phone']) && preg_match($regex_name, $_POST['birthCountry']) && preg_match($regex_nationality, $_POST['nationality']) && preg_match($regex_badge, $_POST['badgeCount']) && preg_match($regex_codecademy, $_POST['codecademyLink'])) {
                    // On les affiches
                    echo $_POST['lastName']
                    ?> <br> <?php echo $_POST['firstName'] ?> <br> <?php echo $_POST['birthDate'] ?> <br> <?php echo $_POST['birthCountry'] ?> <br> <?php echo $_POST['nationality'] ?> <br> <?php echo $_POST['adress'] ?> <br> <?php echo $_POST['email'] ?> <br> <?php echo $_POST['phone'] ?> <br> <?php echo $_POST['degree'] ?> <br> <?php echo $_POST['poleEmploiNumber'] ?> <br> <?php echo $_POST['badgeCount'] ?> <br> <?php echo $_POST['codecademyLink'] ?> <br> <?php echo $_POST['superHero'] ?> <br> <?php echo $_POST['hack'] ?> <br> <?php
                    echo $_POST['experience'];
                    // Sinon c'est pas valide
                } else {
                    echo 'Les informations sont invalides.';
                }
                // Sinon  
            } else {
                // Affichage du formulaire

                echo '<h2>Veuillez remplir les informations :</h2>
                          <form action="index.php" method="post">
      
        <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">Prénom : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="birthDate" class="col-sm-2 control-label">Date de naissance : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthDate" name="birthDate" placeholder="01/01/1998" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="birthCountry" class="col-sm-2 control-label">Pays de naissance : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthCountry" name="birthCountry" placeholder="France" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="nationality" class="col-sm-2 control-label">Nationalité : </label>
                <div class="col-sm-10">
                    <input type="nationality" class="form-control" id="nationality" name="nationality" placeholder="Français" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="adress" class="col-sm-2 control-label">Adresse : </label>
                <div class="col-sm-10">
                    <input type="adress" class="form-control" id="nationality" name="adress" placeholder="1 rue de ta rue" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@test.com" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Téléphone : </label>
                <div class="col-sm-10">
                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="03.22.88.88.88" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="diploma" class="col-sm-2 control-label">Diplôme : </label>
                <div class="col-sm-10">
                    <input type="diploma" class="form-control" id="diploma" name="diploma" placeholder="sans, Bac, Bac+2, Bac+3 ou supérieur" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="poleEmploiNumber" class="col-sm-2 control-label">Numéro pôle emploi: </label>
                <div class="col-sm-10">
                    <input type="poleEmploiNumber" class="form-control" id="poleEmploiNumber" name="poleEmploiNumber" placeholder="" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="badgeCount" class="col-sm-2 control-label">Nombre de badges : </label>
                <div class="col-sm-10">
                    <input type="badgeCount" class="form-control" id="badgeCount" name="badgeCount" placeholder="15" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="codecademyLinks" class="col-sm-2 control-label">Liens codecademy : </label>
                <div class="col-sm-10">
                    <input type="codecademyLinks" class="form-control" id="codecademyLinks" name="codecademyLinks" placeholder="https://www.codecademy.com/fr/Utilisateur" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="superHero" class="col-sm-2 control-label">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="superHero"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="hack" class="col-sm-2 control-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="hack"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="experience" class="col-sm-2 control-label">Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ?</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="experience"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <! Will be used to display an alert to the user>
                </div>
            </div>
                                      <input type="submit" value="Envoyer">
                          </form>';
            }
            ?>
        </p>
    </body>
</html>
