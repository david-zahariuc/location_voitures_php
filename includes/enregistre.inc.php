<?php
if(isset($_POST["submit"])) {

    $firstName = $_POST["prenom_u"];
    $lastName = $_POST["nom_u"];
    $password = $_POST["creation_mot_de_passe"];
    //$passwordRepeat = $_POST["r_mot_de_passe_cree"];
    $email = $_POST["email"];
    
    include "../classes/bdd.class.php";
    include "../classes/enregistre.class.php";
    include "../classes/enregistre_contr.class.php";

    $signUP = new SignupContr ($firstName, $lastName, $password, $email);
    $signUP->signupUser();
    header("location: ../index.php");

} else {
    header("location: ../compte.php?error=failed");
}

?>