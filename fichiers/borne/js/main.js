$( document ).ready(function() {

    /* COUNTDOWN POUR LA REDIRECTION SUR L'ACCUEIL */

    function countdown(counter) {
        var count = counter;
        counter = setInterval(timer, 1000);

        function timer(){
            $(".counter").text(count);
            count=count-1;
            if (count < 0) {
                clearInterval(counter);
                location.reload();
            }

        };
    }  

    /* GESTION DU SLIDE ENTRE LES PAGES */

    var i = 0;
    var process = 0;
    var headerTitle = $(".header-title");

    if(i==0) {
            $(".header-show").css("display","none");   
        }
        else {
            $(".header-show").css("display","block");
        }  

    function slide(event, i) {
        event.preventDefault();            
        nbrToskip = i*-100;
        $( ".page-container" ).animate({"left": nbrToskip+"%"});

        if(i==0) {
            $(".header-show").css("display","none");
            headerTitle.text("Libia");
        }
        else {
            $(".header-show").css("display","block");
        };

        switch(process){

            case 1:
                switch (i){
                    case 1:
                        headerTitle.text("Choix de la formule");
                        break;

                    case 2:
                        headerTitle.text("Achat du ticket");
                        break;
                    case 3:
                        headerTitle.text("Choix du vélo");
                        break;
                    case 4:
                        $(".header-back").css("display","none");
                        headerTitle.text("Bonne route !");
                        countdown(10);
                        break;
            }
            break;

            case 2:
                switch (i){
                    case 1:
                        headerTitle.text("Connexion");
                        break;

                    case 2:
                        headerTitle.text("Choix du vélo");
                        break;
                    case 3:
                        $(".header-back").css("display","none");
                        headerTitle.text("Bonne route !");
                        countdown(10);
                        break;
            }
            break;

            case 3:
                switch (i){
                        case 1:
                            headerTitle.text("Choix du vélo");
                            break;

                        case 2:
                            $(".header-back").css("display","none");
                            headerTitle.text("Bonne route !");
                            countdown(10);
                            break;
            }
            break;

        }

    };


    $(".btn-process1").click(function process_1(event) {
        process = 1;
        event.preventDefault();
        $(".process2").css("display", "none");
        $(".process3").css("display", "none");
        $(".process1").css("display", "block");
    });


    $(".btn-process2").click(function process_2(event) {
        process = 2;
        event.preventDefault();
        $(".process1").css("display", "none");
        $(".process3").css("display", "none");
        $(".process2").css("display", "block");
    });

    $(".btn-process3").click(function process_3(event) {
        process = 3;
        event.preventDefault();
        $(".process1").css("display", "none");
        $(".process2").css("display", "none");
        $(".process3").css("display", "block");
    });

    $( ".slide-next" ).click( function() { i++; slide(event, i)});


    $( ".slide-prev" ).click( function() { i--; slide(event, i)});


    /* AFFICHAGE HEADER MAP */

    $( ".btn-map" ).click(function map(event) {
        event.preventDefault();
        $( ".page-map" ).toggleClass( "map-active");
        $(".header-menu").fadeToggle(400);
        $(this).text(function(i, text){
            return text === "Afficher la carte" ? "Masquer la carte" : "Afficher la carte";
        })
    });


    /* GESTION DE LA DATE */

    var moisLettre = new Array("janvier", "février", "mars", 
    "avril", "mai", "juin", "juillet", "Aout", "Septembre", 
    "octobre", "novembre", "décembre");

    var jourLettre = new Array("Dimanche", "Lundi", "Mardi",
    "Mercredi", "Jeudi", "Vendredi", "Samedi");


    function displayDate(i){
        var oldDate  = new Date();

        var date = new Date(oldDate);
        date.setDate(oldDate.getDate()+i);

        var minutes = date.getMinutes();

        if(minutes < 10) {
            minutes = "0" + minutes;
        }

        var heure = date.getHours() + "h" + minutes;
        var jour = date.getDate();


        var jourL = jourLettre[date.getDay()];
        var mois = moisLettre[date.getMonth()];


        var fullDate = jourL + " " + jour + " " + mois + ", " + heure;

        $(".horaire").text(fullDate);

    }

    displayDate(1);

    /* GESTION DE LA FORMULE + DATE */

    $(".bouton-formule").click(function formule(event){
        event.preventDefault();
        $(".bouton-formule").removeClass('bouton-actif-transparent');
        $(this).addClass('bouton-actif-transparent');

        var formule = $(".bouton-actif-transparent").text();

        if(formule == "1 semaine/ 4€"){
            $(".duree-formule").text("1 semaine : 4€");
            displayDate(7);
        }
        else {
            $(".duree-formule").text("1 jour : 1€");
            displayDate(1);
        }
    });

    /* GESTION ONGLETS MAP */

    $(".map-onglet").click(function formule(event){
        event.preventDefault();
        $(".map-onglet").removeClass('map-onglet-actif');
        $(this).addClass('map-onglet-actif');

        var onglet = $(".map-onglet-actif").text();

        if(onglet == "Populaire"){
            $(".map-proxi").fadeOut(200, function() {
                $(".map-favoris").fadeIn(200);
            });
            
        }
        if(onglet == "Proximité"){
            $(".map-favoris").fadeOut(200, function() {
                $(".map-proxi").fadeIn(200);
            });
            
        }
    });


    /* CHOIX DU VELO */
    $(".velo-dispo").click(function choixVelo(i) {
        var number = $(this).text();
        if(number < 10) {
            number = "0" + number;
        }
        $(".velo-choisi").text(number);
    });

    $(".case-content").click(function nope(event){
        event.preventDefault();
    });


    /* REFRESH LA BORNE SUR L'ACCUEIL */

    $(".countdown").click(function refresh(event) {
        event.preventDefault();
        location.reload();
    });

})