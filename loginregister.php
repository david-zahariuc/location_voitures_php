<?php
include "includes/header.php";
?>

<section class="vw-100 py-5">
<div class="marge">

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
</div>
</section>
<?php
    include "includes/footer.php"
?>
