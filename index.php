    <?php
    include "includes/header.php";
    ?>
    <section class="img1 vw-100 py-5">
        <div class="marge">
            <h2 class="fw-bold display-1 text-center text-white mb-5">Vous cherchez un véhicule pratique ou ludique? Ou les deux à la fois?<br> Vous êtes au bon endroit
            </h2>
            <form id="formulaire">
                <div class="col-12 d-flex flex-wrap justify-content-start flex-row px-2">
                    <div class="mx-3 my-2 px-3 col-md-3 col-6 radio text-nowrap">
                        <label class="w-50 text-start">Coupé</label>
                        <input class="w-50 text-end" type="radio" name="categorie">
                    </div>
                    <div class="mx-3 my-2 col-md-3 col-6 px-3 radio text-nowrap">
                        <label class="w-50 text-start">Crossover</label>
                        <input class="w-50 text-end" type="radio" name="categorie">
                    </div>
                    <div class="mx-3 my-2 col-md-3 col-6 px-3 radio text-nowrap">
                        <label class="w-50 text-start">Tous</label>
                        <input class="w-50 text-end" type="radio" name="categorie">
                    </div>
                    <div class="col-md-3 col-6"></div>
                </div>

                <div class="d-flex justify-content-sm-start flex-wrap justify-content-center formulaire">

                    <div class="col-lg-4 col-12 px-2 align-self-end">
                        <div class="titre_centre">
                            <label class="w-100 text-white">Lieu de: Départ/Retour</label>
                            <select class="w-100" name="choix" id="choixDealer" required>
                                <option selected value="choix">Choisissez votre garage:</option>
                                <option value="paris">Paris</option>
                                <option value="lyon">Lyon</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-nowrap">

                        <div class="w-50 mx-2 align-self-end">
                            <label class="w-100 text-white" for="trip-start">Date de départ:</label>
                            <input class="dates w-100" type="date" id="start" name="trip-start" value="" min="" max=""
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
                            <input class="dates w-100" type="date" id="end" name="trip-end" value="" min="" max=""
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
                        <button id="rechercherBTN" class="mx-2 py-2 w-50"
                            style="min-width: fit-content" disabled>Rechercher</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="voituresDisponible" class="marge">
    </section>
    <?php
    include "includes/footer.php"
    ?>
