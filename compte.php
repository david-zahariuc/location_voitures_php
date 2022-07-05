<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <?php
    if(isset($_SESSION["fn_user"])) {
        
        echo "Bienvenue" . $_SESSION["fn_user"];
        echo "<a href = \"includes/logout.inc.php\">Logout</a>";
    } else {
        echo "Sing up";
    }
    ?>
    <section>
        <form action="includes/enregistre.inc.php" method="POST">
            <div>
                <div><label for="prenom_u">Votre prenom:</label></div>
                <div><input type="text" name="prenom_u"></div>
            </div>
            <div>
                <div><label for="nom_u">Votre nom</label></div>
                <div><input type="text" name="nom_u"></div>
            </div>
            <div>
                <div><label for="creation_mot_de_passe">Choisissez votre nom de passe</label></div>
                <div><input type="password" name="creation_mot_de_passe"></div>
            </div>

            <!--<div>
                <div><label for="r_mot_de_passe_cree">Saisir à nouveau votre nom de passe</label></div>
                <div><input type="password" name="r_mot_de_passe_cree"></div>
            </div>-->
            <div>
                <div><label for="email">Votre E-mail</label></div>
                <div><input type="email" name="email"></div>
            </div>
            <div><button type="submit" name="submit">S'enregistrer</button> </div>
        </form>
        
        <form action="includes/inscrire.inc.php" method="POST">
            <div>
                <div><label for="utilisateur"></label></div>
                <div><input type="text" name="utilisateur"></div>
            </div>
            <div>
                <div><label for="mot_de_passe"></label></div>
                <div><input type="password" name="mot_de_passe"></div>
            </div>
            <div><button type="submit" name="login">S'inscrire</button> </div>

        </form>
    </section>
</body>

</html>