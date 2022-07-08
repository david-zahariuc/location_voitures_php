<?php
include "includes/header.php";
?>
<?php

require_once "classes/bdd.class.php";
require_once "classes/entire_fleet.class.php";
require_once "classes/show_fleet.class.php";

?>
<section class="vw-100 py-5">
        <div class="marge">
                <ul class="d-flex flex-wrap">
                <?php
                $cars = new ShowFleet();
                $cars->show();
                //$cars->getClass();

                ?>
                </ul>
        </div>
</section>
<?php
include "includes/footer.php"
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>