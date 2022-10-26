<?php
include "includes/header.php";
?>
<section class="vw-100 py-5">
<div class="marge">
    <?php
//if (isset($_SESSION["fn_user"])) {
?>
    <h2>
        <?php
        echo "Bonjour " . $_SESSION["fn_user"] . " " . $_SESSION["ln_user"];
    ?>
    </h2>
    <?php
       echo "<a href=\"includes\logout.inc.php\">Se deconnecter</a>";
//};

    ?>
</div>
</section>
<?php
include "includes/footer.php"
?>
   