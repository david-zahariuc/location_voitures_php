<?php

class AvailabilityQuery extends VehicleAvailability
{
    private $id_auto;
    private $class;
    private $make;
    private $model;
    private $doors_nb;
    private $places_nb;
    private $fuel;
    private $transmission;
    private $price;
    private $photos;

    public function show()
    {
      
        foreach (self::$list as $object) {
?>
            <form class="col-12 presentation" method="POST" action="complete_order.php">
                <article class="articleVoiture my-5">
                    <h1 class="titreVoitures"><?php echo $object->make ?> <?php echo $object->model ?></h1>
                    <div class="col-12 d-flex flex-sm-row flex-wrap">
                        <div class="col-md-4 col-sm-6 col-12 voiture" style="background-image: url(&quot;<?php echo $object->photos ?>front.jpg&quot;);"></div>
                        <div class="col-md-5 col-12 d-flex flex-column order-sm-3 justify-content-center px-5 py-4">
                            <h3 id="km">Inclus: 500km pour la location</h3>
                            <div class="d-flex flex-row flex-md-column flex-lg-row">
                                <div class="col-4 col-md-12 col-lg-4">
                                    <figure id="icon1"><img src="img/personnes.png">
                                        <figcaption><?php echo $object->places_nb ?></figcaption>
                                    </figure>
                                    <figure id="icon2"><img src="img/portes.png">
                                        <figcaption><?php echo $object->doors_nb ?></figcaption>
                                    </figure>
                                </div>
                                <div class="col-8 col-md-12 col-lg-4">
                                    <figure id="icon3"><img src="img/transmission.png">
                                        <figcaption><?php echo $object->transmission ?></figcaption>
                                    </figure>
                                    <figure id="icon4"><img src="img/gas-station.png">
                                        <figcaption><?php echo $object->fuel ?></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 col-md-3 order-md-3 col-sm-6 col-12 py-4" style="background-color: rgb(156, 165, 180);">
                            <div class="d-flex flex-row justify-content-between">
                                <h3>Durée de la location</h3>
                                <h3>
                                    <?php
                                    $origin = new DateTime($this->tripStart);
                                    $target = new DateTime($this->tripEnd);
                                    $interval = $origin->diff($target);
                                    $days =  intval($interval->format('%R%a days'));
                                    echo $days;
                                    ?>
                                </h3>

                            </div>
                            <h6 class="pt-3 text-center">Assurance tous riques inclus</h6>
                            <div class="pt-3 d-flex flex-row justify-content-between">
                                <h2 id="total">Total à payer</h2>
                                <h2 id="afficheTotal">
                                    <?php
                                    $total =  $object->price * $days;
                                    echo $total . " €";
                                    ?>
                                </h2>
                            </div>
                            <div class="pt-3 d-flex flex-column"><button class="align-self-center" type="submit">Réserver ce véhicule</button></div>
                            <input type="hidden" name="idAuto" value="<?php echo $object->id_auto ?>" />
                            <input type="hidden" name="marque" value="<?php echo $object->make ?>" />
                            <input type="hidden" name="model" value="<?php echo $object->model ?>" />
                            <input type="hidden" name="jours" value="<?php echo $days ?>" />
                            <input type="hidden" name="prixTotal" value="<?php echo $total ?>" />
                            <input type="hidden" name="dateDepart" value="<?php echo $origin->format('Y-m-d'); ?>" />
                            <input type="hidden" name="dateRetour" value="<?php echo $target->format('Y-m-d'); ?>" />






                        </div>
                    </div>
                </article>
            </form>

<?php

        }
    }
}

?>