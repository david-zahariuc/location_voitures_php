<?php
session_start();

if(isset($_POST["payer"])) {
 var_export($_SESSION["user_nb"]);
 }

    $id_auto = $_POST['idAuto'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    
    include "../classes/bdd.class.php";
    include "../classes/reservation.class.php";
    include "../classes/reservation_contr.class.php";

    //$addReservation = new Reservation ($id_user, $id_auto, $start, $end);
    //$addReservation->addReservation();


?>