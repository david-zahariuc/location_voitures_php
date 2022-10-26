<?php
include "includes/header.php";
?>
<?php
if (!isset($_SESSION["fn_user"])) {
    header("location: loginregister.php");
}

?>
<main style="margin: 0 auto; width: 80%">
    <section class="vw-100 py-5">

        <h2>
            <?php
            echo "Bonjour " . $_SESSION["fn_user"] . ". " . "Finissons la commande.";
            ?>
        </h2>

        <?php
        $id = $_POST['idAuto'];
        $make = $_POST['marque'];
        $model = $_POST['model'];
        $days = $_POST['jours'];
        $total = $_POST['prixTotal'];
        $start = $_POST['dateDepart'];
        $end = $_POST['dateRetour'];

        ?>

        <form method="POST" action="includes/send_reservation.inc.php">
            <table>
                <h2 style="background-color: rgb(224, 27, 20); color: white;">Vous avez réservé la <?php echo $make . " " . $model ?></h2>
                <tbody>
                    <tr style="background-color: rgb(55, 60, 64);">
                        <td id="tr1td1" style="color: white;">Date départ: </td>
                        <td id="tr1td2" style="color: white;"><?php echo $start ?></td>
                    </tr>
                    <tr style="background-color: rgb(55, 60, 64);">
                        <td id="tr2td1" style="color: white;">Date retour: </td>
                        <td id="tr2td2" style="color: white;"><?php echo $end ?></td>
                    </tr>
                    <tr style="background-color: rgb(55, 60, 64);">
                        <td id="tr3td1" style="color: white;">Durée location: </td>
                        <td id="tr3td2" style="color: white;"><?php echo $days ?> jours</td>
                    </tr>

                    <tr style="background-color: rgb(55, 60, 64);">
                        <td id="tr6td1" style="color: white; background-color: rgb(224, 27, 20);">Total: </td>
                        <td id="tr6td2" style="color: white; background-color: rgb(224, 27, 20);"><?php echo $total ?> €</td>
                    </tr>
                </tbody>
            </table>
            <button class="my-5" type="submit" name="payer">Payer</button>
            <input type="hidden" name="idAuto" value="<?php echo $id ?>" />
            <input type="hidden" name="start" value="<?php $start ?>" />
            <input type="hidden" name="end" value="<?php echo $end ?>" />
        </form>
    </section>
</main>

<?php
include "includes/footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>