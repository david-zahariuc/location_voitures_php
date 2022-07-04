//let test = document.getElementById("test");
//test.className = "col-12 d-flex flex-row flex-nowrap";
//Catégorie
//Coupé
//4*4, Suv, Crossover

//Formulaire Dates
let unJour = 1000 * 60 * 60 * 24
function returnDates(id) {
    date = new Date(document.getElementById(id).value);
    return date;
}
let dateDepart = {};
let dateRetour = {};
let totalJours = 0;


$(function () { //function qui bloque de choisir une date dans le passe
    let ajourdhui = new Date()
    let mois = ajourdhui.getMonth() + 1;
    let jour = ajourdhui.getDate();
    let anne = ajourdhui.getFullYear();
    if (mois < 10)
        mois = '0' + mois.toString();
    if (jour < 10)
        jour = '0' + jour.toString();
    let minDate = anne + '-' + mois + '-' + jour;
    $('#start').attr('min', minDate);
});

$(".dates").change(function () { // jquerry on chage function
    if (dateDepart !== null) {  //desactiver l'input date retour tant que la date depart n'est pas choisie
        document.getElementById("end").disabled = false;
        document.getElementById("startHour").disabled = false;
        document.getElementById("rechercherBTN").disabled = false;
    } else if (dateRetour !== null) {
        document.getElementById("rechercherBTN").disabled = false;
    }
    dateDepart = returnDates("start");
    dateRetour = returnDates("end");

    $(function () { //function qui bloque de choisir une date dans le passe
        let mois = dateDepart.getMonth() + 1;
        let jour = dateDepart.getDate();
        let anne = dateDepart.getFullYear();
        if (mois < 10)
            mois = '0' + mois.toString();
        if (jour < 10)
            jour = '0' + jour.toString();
        let minDate = anne + '-' + mois + '-' + jour;
        $('#end').attr('min', minDate);
    });
    function jours() {

        total = Math.round(dateRetour.getTime() - dateDepart.getTime()) / (unJour);
        if (total == 0) {
            total += 1;
        }
        return total;
    }
    totalJours = jours()

});

console.log(totalJours);

let heureDepart = document.getElementById("startHour").value;
let heureRetour = document.getElementById("endHour").value;
$(".heures").change(function () { // jquerry on chage function
    heureDepart = document.getElementById("startHour").value;
    heureRetour = document.getElementById("endHour").value;
});


//on a le nombre de heures

const voiture1 = {
    categorie: "Coupé",
    marque: "Audi",
    modele: "R8",
    nombrePortes: "2",
    places: "2",
    carburant: "Essence",
    boiteVitesse: "Mécanique",
    prixJour: 78.55,
}
const voiture2 = {
    categorie: "Coupé",
    marque: "Porsche",
    modele: "911",
    nombrePortes: "2",
    places: "2",
    carburant: "Essence",
    boiteVitesse: "Automatique",
    prixJour: 95.22,
}
const voiture3 = {//Ferrari_458
    categorie: "Coupé",
    marque: "Ferrari",
    modele: "458",
    nombrePortes: "2",
    places: "2",
    carburant: "Essence",
    boiteVitesse: "Automatique",
    prixJour: 112.55,
}
const voiture4 = {//Shelby_GT500
    categorie: "Coupé",
    marque: "Shelby",
    modele: "GT500",
    nombrePortes: "2",
    places: "2",
    carburant: "Essence",
    boiteVitesse: "Mécanique",
    prixJour: 62.55,
}
const voiture5 = {//Alfa Romeo_4C

    categorie: "Coupé",
    marque: "Alfa Romeo",
    modele: "4C",
    nombrePortes: "2",
    places: "2",
    carburant: "Essence",
    boiteVitesse: "Mécanique",
    prixJour: 80.75,
}
const voiture6 = {//DS7_CROSSBACK
    categorie: "Crossover",
    marque: "DS7",
    modele: "CROSSBACK",
    nombrePortes: "4",
    places: "5",
    carburant: "Gasoil",
    boiteVitesse: "Mécanique",
    prixJour: 55.75,
}
const voiture7 = {//Audi_SQ5
    categorie: "Crossover",
    marque: "Audi",
    modele: "SQ5",
    nombrePortes: "4",
    places: "4",
    carburant: "Essence",
    boiteVitesse: "Automatique",
    prixJour: 59.75,
}
const voiture8 = {//Porsche_Macan
    categorie: "Crossover",
    marque: "Porsche",
    modele: "Macan",
    nombrePortes: "4",
    places: "4",
    carburant: "Essence",
    boiteVitesse: "Automatique",
    prixJour: 62.75,
}
const voiture9 = {//Jaguar_F-Pace
    categorie: "Crossover",
    marque: "Jaguar",
    modele: "F-Pace",
    nombrePortes: "4",
    places: "4",
    carburant: "Essence",
    boiteVitesse: "Automatique",
    prixJour: 62.75,
}
const voiture10 = {//Volkswagen_T-Roc
    categorie: "Crossover",
    marque: "Volkswagen",
    modele: "T-Roc",
    nombrePortes: "4",
    places: "5",
    carburant: "Gasoil",
    boiteVitesse: "Mécanique",
    prixJour: 45.75,
}

let dealerParis = [voiture1, voiture2, voiture3, voiture5, voiture6, voiture7, voiture8, voiture10];
let dealerLyon = [voiture2, voiture3, voiture4, voiture5, voiture6, voiture7, voiture9, voiture10];

let dealer = [];
let radios = document.querySelectorAll("input[name=categorie]");
console.log(radios);
$("#choixDealer").change(function () { // jquerry on chage function
    let choix = document.getElementById("choixDealer").value;
    if (choix === "paris") {
        dealer = dealerParis;
        console.log(dealer);

    } else if (choix === "lyon") {
        dealer = dealerLyon;
    }
    if (radios[1].checked) {
        let crossovers = [];
        for (let k = 0; k < dealer.length; k++) {
            if (dealer[k].categorie == "Crossover") {
                crossovers.push(dealer[k]);
                console.log(crossovers)
            }
        }
        dealer = crossovers;
    } else if (radios[0].checked) {

        let sports = [];
        for (let s = 0; s < dealer.length; s++) {
            if (dealer[s].categorie == "Coupé") {
                sports.push(dealer[s]);
                console.log(sports)
            }
        }
        dealer = sports;
    }
    /*} else if (radios[0].checked) {
        for (let s = 0; s < dealer.length; s++) {
            let sports = Object.values(dealer[s]);
            if (sports.includes("Coupé")) {
                dealer = dealer.slice(s);
            };
        }
    }*/
});
let sec = document.getElementById("voituresDisponible");

let prixAssurance = document.querySelector("input[name=moins26]");


document.getElementById("rechercherBTN").addEventListener("click", function afficheVoiture(e) {
    e.preventDefault();
    sec.innerHTML = "";
    for (let i = 0; i < dealer.length; i++) {
        // create elements
        let art = document.createElement("article");
        sec.appendChild(art);
        art.className = "articleVoiture my-5";
        let titreVoiture = document.createElement("h1");
        art.appendChild(titreVoiture);
        titreVoiture.className = "titreVoitures";
        titreVoiture.innerHTML = dealer[i].marque + " " + dealer[i].modele // affiche la marque et le modele
        let conteneur = document.createElement("div");                     // conteneur general
        art.appendChild(conteneur);
        conteneur.className = "col-12 d-flex flex-sm-row flex-wrap"; //articol voiture
        let conteneurImg = document.createElement("div");
        conteneur.appendChild(conteneurImg);
        conteneurImg.className = "col-md-4 col-sm-6 col-12 voiture";
        conteneurImg.style.backgroundImage = "url(\"img/" + dealer[i].marque + "_" + dealer[i].modele + ".jpg\")";
        // let photo = document.createElement("img");
        // conteneurImg.appendChild(photo);
        // photo.src = "img/" + dealer[i].marque + "_" + dealer[i].modele + ".jpg";    //affiche la photo de la voiture
        let conteneurInfoVoiture = document.createElement("div");
        conteneur.appendChild(conteneurInfoVoiture);
        conteneurInfoVoiture.className = "col-md-5 col-12 d-flex flex-column order-sm-3 justify-content-center px-5 py-4";
        let distance = document.createElement("h3");
        conteneurInfoVoiture.appendChild(distance);
        distance.id = "km";
        distance.innerHTML = "Inclus: 500km pour la location";
        let conteneurIcons = document.createElement("div");
        conteneurInfoVoiture.appendChild(conteneurIcons);
        conteneurIcons.className = "d-flex flex-row flex-md-column flex-lg-row";

        colonesFigures1 = document.createElement("div");
        conteneurIcons.appendChild(colonesFigures1);
        colonesFigures1.className = "col-4 col-md-12 col-lg-4";

        let icon1 = document.createElement("figure");
        colonesFigures1.appendChild(icon1);
        icon1.id = "icon1";
        let imgIcon1 = document.createElement("img");
        icon1.appendChild(imgIcon1);
        imgIcon1.src = "img/personnes.png";
        let caption1 = document.createElement("figcaption")
        icon1.appendChild(caption1);
        caption1.innerHTML = dealer[i].places;

        let icon2 = document.createElement("figure");
        colonesFigures1.appendChild(icon2);
        icon2.id = "icon2";
        let imgIcon2 = document.createElement("img");
        icon2.appendChild(imgIcon2);
        imgIcon2.src = "img/portes.png";
        let caption2 = document.createElement("figcaption")
        icon2.appendChild(caption2);
        caption2.innerHTML = dealer[i].nombrePortes;

        colonesFigures2 = document.createElement("div");
        conteneurIcons.appendChild(colonesFigures2);
        colonesFigures2.className = "col-8 col-md-12 col-lg-4";

        let icon3 = document.createElement("figure");
        colonesFigures2.appendChild(icon3);
        icon3.id = "icon3";
        let imgIcon3 = document.createElement("img");
        icon3.appendChild(imgIcon3);
        imgIcon3.src = "img/transmission.png";
        let caption3 = document.createElement("figcaption")
        icon3.appendChild(caption3);
        caption3.innerHTML = dealer[i].boiteVitesse;

        let icon4 = document.createElement("figure");
        colonesFigures2.appendChild(icon4);
        icon4.id = "icon4";
        let imgIcon4 = document.createElement("img");
        icon4.appendChild(imgIcon4);
        imgIcon4.src = "img/gas-station.png";
        let caption4 = document.createElement("figcaption")
        icon4.appendChild(caption4);
        caption4.innerHTML = dealer[i].carburant;

        let conteneurPrix = document.createElement("div");
        conteneur.appendChild(conteneurPrix);

        conteneurPrix.className = "px-4 col-md-3 order-md-3 col-sm-6 col-12 py-4";    //div prix total
        conteneurPrix.style.backgroundColor = "#9CA5B4";
        let conteneurDuree = document.createElement("div");
        conteneurPrix.appendChild(conteneurDuree);
        conteneurDuree.className = "d-flex flex-row justify-content-between";
        let jours = document.createElement("h3");
        conteneurDuree.appendChild(jours);
        jours.innerHTML = "Durée de la location"
        let nombreJours = document.createElement("h3");
        conteneurDuree.appendChild(nombreJours);
        nombreJours.innerHTML = totalJours;        //valeur qu'on va recuperer
        let prixLocation = 0;
        let assurance = document.createElement("h6");
        assurance.className = "text-center";
        conteneurPrix.appendChild(assurance);
        let fraisAssurance = 0;
        let prixAssurance = document.querySelector("input[name=moins26]");
        if (prixAssurance.checked) {
            assurance.innerHTML = "Assurance jeune conducteur";
            fraisAssurance = 50;
            prixLocation += fraisAssurance;

        } else {
            fraisAssurance = 0;
            prixLocation += fraisAssurance;
            assurance.innerHTML = "Assurance tous riques inclus";
            assurance.className = "pt-3 text-center";
        }


        let conteneurPrixTotal = document.createElement("div");
        conteneurPrix.appendChild(conteneurPrixTotal);
        let totalPayer = document.createElement("h2");
        conteneurPrixTotal.appendChild(totalPayer);
        totalPayer.id = "total";
        totalPayer.innerHTML = "Total à payer";

        let PrixTotal = document.createElement("h2");
        conteneurPrixTotal.appendChild(PrixTotal);
        conteneurPrixTotal.className = "pt-3 d-flex flex-row justify-content-between";
        PrixTotal.id = "afficheTotal";
        prixLocation += Number((dealer[i].prixJour * totalJours).toFixed(2));
        console.log(prixLocation)

        PrixTotal.innerHTML = prixLocation + " &#8364";  //pour plus tard

        let conteneurButton = document.createElement("div");
        conteneurPrix.appendChild(conteneurButton);
        conteneurButton.className = "pt-3 d-flex flex-column";
        let BTN = document.createElement("button");
        conteneurButton.appendChild(BTN);
        BTN.className = "align-self-center";
        BTN.innerHTML = "Réserver ce véhicule";

        BTN.addEventListener("click", function reserver() {
            var win = window.open("", "Title", "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=200,top=" + (screen.height - 400) + ",left=" + (screen.width - 840));
            let reservation = win.document.createElement("div");
            win.document.body.style.fontFamily = 'Roboto';
            win.document.body.appendChild(reservation);
            let table = win.document.createElement("table");
            reservation.appendChild(table);
            let titre = win.document.createElement("h2");
            titre.style.backgroundColor = "#E01B14";
            titre.style.color = "white";
            table.appendChild(titre);
            titre.innerHTML = "Vous avez réservé la " + dealer[i].marque + " " + dealer[i].modele
            let tbody = win.document.createElement("tbody");
            table.appendChild(tbody);
            for (let j = 1; j <= 6; j++) {
                let tr = win.document.createElement("tr");
                tr.style.backgroundColor = "#373C40";
                for (let i = 1; i <= 2; i++) {
                    let td = win.document.createElement("td");
                    td.style.color = "white";
                    td.id = "tr" + j + "td" + i;
                    tr.appendChild(td);
                }
                tbody.appendChild(tr);
            }
            win.document.getElementById("tr1td1").innerHTML = "Date départ";
            win.document.getElementById("tr1td2").innerHTML = dateDepart.getDate() + "/" + (dateDepart.getMonth() + 1) + "/" + dateDepart.getFullYear();
            win.document.getElementById("tr2td1").innerHTML = "Date retour";
            win.document.getElementById("tr2td2").innerHTML = dateRetour.getDate() + "/" + (dateRetour.getMonth() + 1) + "/" + dateRetour.getFullYear();
            win.document.getElementById("tr3td1").innerHTML = "Durée location";
            win.document.getElementById("tr3td2").innerHTML = totalJours + " jours";
            win.document.getElementById("tr4td1").innerHTML = "Tarif journalier";
            win.document.getElementById("tr4td2").innerHTML = dealer[i].prixJour + " &#8364";
            win.document.getElementById("tr5td1").innerHTML = assurance.innerHTML;
            win.document.getElementById("tr5td2").innerHTML = fraisAssurance + " &#8364";
            win.document.getElementById("tr6td1").innerHTML = "Total";
            win.document.getElementById("tr6td1").style.backgroundColor = "#E01B14";
            win.document.getElementById("tr6td2").innerHTML = prixLocation + " &#8364";
            win.document.getElementById("tr6td2").style.backgroundColor = "#E01B14";
        })

    }
})
function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
        menu.className = "open";
        icon.className = "open";
        root.style.overflowY = "hidden";
    } else {
        menu.className = "";
        icon.className = "";
        root.style.overflowY = "";
    }
}

