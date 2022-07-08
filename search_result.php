<?php
include "includes/header.php";
?>
<main>
<section id="voituresDisponible" class="marge">
    <?php
    if (isset($_POST["sendBTN"])) {

        $vehicle_type = $_POST["choixCategorie"];
        $trip_start = $_POST["date_depart"];
        $trip_end = $_POST["date_retour"];
        //$passwordRepeat = $_POST["r_mot_de_passe_cree"];
        //$assurance = $_POST["moins26"];


        require_once "classes/bdd.class.php";
        require_once "classes/vehicle_availability.class.php";
        require_once "classes/availability_contr.class.php";
        $chosenAutos = new AvailabilityQuery();
        $chosenAutos->checkAvailability($vehicle_type, $trip_start, $trip_end);
        $chosenAutos->show();

        //    $chosenAutos = new AvailableVehicles ("$vehicle_type",$trip_start,$trip_end);
        //header("location: show_cars.php?error=none");

    }
 /*   
else {
    header("location: search_result.php?error=failed");
}
*/
    ?>
    </section>
</main>
<?php
include "includes/footer.php";
?>
</body>