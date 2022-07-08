<?php
if(isset($_POST["login"])) {

    $email = $_POST["utilisateur"];
    $password = $_POST["mot_de_passe"];
    //$passwordRepeat = $_POST["r_mot_de_passe_cree"];
    
    include "../classes/bdd.class.php";
    include "../classes/login.class.php";
    include "../classes/login_contr.class.php";

    $login = new LoginContr ( $email, $password);
    $login->loginUser();
    header("location: ../compte.php");
} else {
    header("location: ../compte.php?error=failed");
}
?>