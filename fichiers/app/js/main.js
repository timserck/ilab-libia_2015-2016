		$( document ).ready(function() {

		$(".header_back").hide();
        $(".header_link_profil").hide();

            //compte
            $(".link_compte").click(function compte(event) {
                      event.preventDefault();
                      $(".compte").toggleClass( "compte_active" );
                      if  ( $( ".compte" ).is( ".compte_active" ) ) 
                      {
                      $(".headerTitle").text("Compte");    
                  } else{
                      $(".headerTitle").text("Accueil"); 


                  }
                  $(".header_back").show();

                         
            });

            $(".link_connect").click(function connect(event) {
                      event.preventDefault();
                      $(".connect").toggleClass( "connect_active" );
                      $(".headerTitle").text("Accueil");
                      $(".header_back").hide();
            $(".header_link_profil").show();


            });

            $(".link_inscription").click(function inscription(event) {
                      event.preventDefault();
                      $(".inscription").toggleClass( "inscription_active" );
                      $(".headerTitle").text("Libia vélo");
                      $(".header_back").hide();
                      if  ( $( ".inscription" ).is( ".inscription_active" ) ) 
                      {
                      $(".connect").toggleClass( "inscription_active" );
                      $(".header_back").show();
                      $(".headerTitle").text("Inscription");    
                       }    


            });

			$(".link_borne").click(function borne(event) {
		  			event.preventDefault();
		  			$(".borne").toggleClass( "borne_active" );
		  			$(".headerTitle").text("Borne");
		  			$(".header_back").show();


			});

			$(".link_map").click(function map(event) {
		  			event.preventDefault();
		  			$(".map").toggleClass( "map_active" );
		  			$(".headerTitle").text("Carte");
		  			$(".header_back").show();


			});

			$(".link_back").click(function back(event) {
                      event.preventDefault();
                      if  ( $( ".map" ).is( ".map_active" ) ) {
                      $(".map").toggleClass( "map_active" );
                      $(".headerTitle").text("Accueil");
                      $(".header_back").hide();

                      }

                      if  ( $( ".borne" ).is( ".borne_active" ) ) {
                      $(".borne").toggleClass( "borne_active" );
                      $(".headerTitle").text("Accueil");
                      $(".header_back").hide();

                      }

                      if  ( $( ".compte" ).is( ".compte_active" ) ) {
                      $(".compte").toggleClass( "compte_active" );
                      $(".headerTitle").text("Accueil");
                      $(".header_back").hide();

                      }
                      if  ( $( ".inscription" ).is( ".inscription_active" ) ) {
                      $(".inscription").toggleClass( "inscription_active" );
                      $(".headerTitle").text("Libia vélo");
                      $(".header_back").hide();
                      }

                      

            });

			$(".map_over").click(function (event) {
		  			event.preventDefault();
            $(".volet").toggleClass( "volet_active" );
		  			$(".map_over").toggleClass( "map_over_active" );


			});
        $(".reserver").click(function (event) {
            event.preventDefault();
            $(".callback").text("Le velo a bien été reservé.  Vous avez 15min pour aller le chercher.");

            setTimeout(function(){
              $(".header_back").hide(); 
              $(".map").toggleClass( "map_active" );
              $(".volet").toggleClass( "volet_active" );
              $(".connect").toggleClass( "connect_active" );
              
            }, 5000);
            
      });





		});