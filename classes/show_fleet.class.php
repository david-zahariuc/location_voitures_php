<?php
class ShowFleet extends EntireFleet
{
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
        $this->getCars();
        //var_dump(self::$automobileList);
        foreach (self::$automobileList as $object) {
?>

            <li class="col-4 automobile">
                <div class="py-5 px-5">
                    <div>
                        <div>
                            <div>
                                <div><span class="titreAuto"><?php echo $object->make ?> <?php echo $object->model ?></span></div>
                                <div><?php echo $object->class ?></div>
                            </div><img class="w-100" src="<?php echo $object->photos ?>front.jpg">
                        </div>
                    </div>
                    <div></div>
                </div>
            </li>
            <li class="col-12 presentation">
            <article class="articleVoiture my-5">
                <h1 class="titreVoitures"><?php echo $object->make ?> <?php echo $object->model ?></h1>
                <div class="col-12 d-flex flex-sm-row flex-wrap">
                    <div class="col-md-4 col-sm-6 col-12 voiture" style="background-image: url(&quot;<?php echo $object->photos ?>front.jpg&quot;);"></div>
                    <div class="col-md-5 col-12 d-flex flex-column order-sm-3 justify-content-center px-5 py-4">
                        <h3 id="km">Inclus: 500km pour la location</h3>
                        <div class="d-flex flex-row flex-md-column flex-lg-row">
                            <div class="col-6 col-md-12 col-lg-4">
                                <figure id="icon1"><img src="img/personnes.png">
                                    <figcaption><?php echo $object->places_nb ?></figcaption>
                                </figure>
                                <figure id="icon2"><img src="img/portes.png">
                                    <figcaption><?php echo $object->doors_nb ?></figcaption>
                                </figure>
                            </div>
                            <div class="col-6 col-md-12 col-lg-4">
                                <figure id="icon3"><img src="img/transmission.png">
                                    <figcaption><?php echo $object->transmission ?></figcaption>
                                </figure>
                                <figure id="icon4"><img src="img/gas-station.png">
                                    <figcaption><?php echo $object->fuel ?></figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </article>
            </li>
        
<?php
        }
    }
}
?>