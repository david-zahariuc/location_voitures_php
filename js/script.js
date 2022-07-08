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

function returnDates(id) {
    date = new Date(document.getElementById(id).value);
    return date;
}

$(".dates").change(function () { // jquerry on chage function
    if ($('#start') !== null) {  //desactiver l'input date retour tant que la date depart n'est pas choisie
        document.getElementById("end").disabled = false;
    }

    dateDepart = returnDates("start");


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

});

            //nos modeles
            $(document).ready(function() {
                $(".presentation").hide();
            });

            $( ".automobile" ).each(function( index ) {
                $(this).on("click", function(){
                    $(".presentation").hide();
                    
                     $( this ).next().toggle();
                     $('html, body').animate({
                    scrollTop: $( this ).next().offset().top
                }, 50);
                })
  
});
