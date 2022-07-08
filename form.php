            <form id="formulaire" action="search_result.php" method="POST">
                
                <div class="d-flex justify-content-sm-start flex-wrap justify-content-center formulaire">

                    <div class="col-lg-4 col-12 px-2 align-self-end">
                        <div class="titre_centre">
                            <label class="w-100 text-white">CATÉGORIE DE VÉHICULE</label>
                            <select class="w-100" name="choixCategorie" id="" required>
                                <option selected>Toutes</option>
                                <?php
                               require "classes/bdd.class.php";
                               require "classes/auto_type.class.php";
                               $option = new AutoType();
                               $option->getFields();

                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-nowrap">

                        <div class="w-50 mx-2 align-self-end">
                            <label class="w-100 text-white" for="trip-start">Date de départ:</label>
                            <input class="dates w-100" type="date" id="start" name="date_depart" value="" min="" max=""
                                required>
                        </div>
                        <div class="w-50 mx-2 align-self-end">
                            <label class="w-100 text-white" for="heureDepart">Heure de départ:</label>
                            <select class="heures w-100" id="startHour" name="heureDepart">
                                <option value="0">Avant 12h</option>
                                <option value="1">Aprés 12h</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-nowrap">

                        <div class="w-50 mx-2 align-self-end">
                            <label class="w-100 text-white" for="trip-end">Date de retour:</label>
                            <input class="dates w-100" type="date" id="end" name="date_retour" value="" min="" max=""
                                required disabled>
                        </div>
                        <div class="w-50 mx-2 align-self-end">
                            <label class="w-100 text-white" for="heureRetour">Heure de retour:</label>
                            <select class="heures w-100" id="endHour" name="heureRetour">
                                <option value="0">Avant 12h</option>
                                <option value="1">Aprés 12h</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="col-12 d-flex flex-nowrap justify-content-end mt-4">

                    <div class="col-lg-2 align-self-end d-flex">
                        <div class="radio">
                            <label for="moins26">Moins de 26 ans</label>
                            <input type="checkbox" name="moins26">
                        </div>
                    </div>
                    <div class="col-lg-2 align-self-end">
                        <button id="rechercherBTN" name="sendBTN" class="mx-2 py-2 w-50"
                            style="min-width: fit-content" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>
           
