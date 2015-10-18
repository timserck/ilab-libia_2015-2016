<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Borne Libia</title>
		<meta charset="UTF-8" />
		<meta name="apple-mobile-web-app-title" content="Libia">

		<link rel="apple-touch-icon" href="./images/logo128x128.png"/>
		<link rel="apple-touch-icon" sizes="128x128" href="./images/logo128x128.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="height=device-height, initial-scale=1.0">

		<meta content="yes" name="apple-mobile-web-app-capable"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0">

		<link rel="stylesheet" href="./css/normalize.css" />
		<link rel="stylesheet" href="./css/style.css" />

		<script src="https://use.typekit.net/zch3hag.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	</head>
	<body class="page-accueil">

		<!-- HEADER -->

		<header>
			<nav class="menu-libia-left">
				<ul class="header-menu">
					<li><a href="#" class="header-back slide-prev header-show">retour</a></li>
					<li><a href="#" class="header-libia header-show">libia.vélo</a></li>
					<li><a href="#" class="header-title">Libia</a></li>
				</ul>	
			</nav>

			<nav class="menu-libia-right">
				<ul>
					<li><a href="#" class="btn-map">Afficher la carte</a></li>
				</ul>
			</nav>			
		</header>
		<main>
			<div class="page-container">

				<!-- PAGE MAP -->
				
				<div class="page-map">
					<aside class="panel">
						<div class="map-information">
							<div class="text-left">
								<p class="borneProxi">Borne actuelle</p>
								<h1 class="borneNom">Porte de Namur</h1>
							</div>
							<div class="text-right">
								<p>Vélos disponibles</p>
								<p><span class="velo-dispo borneVeloRestant">10</span>/<span class="borneVeloTotal">12</span></p>
							</div>
						</div>
						<div class="map-infos map-proxi">
							<h1>Autres bornes à proximité</h1>
							<div class="borne-container">
								<div class="text-left">
									<h1>Boulevard Cauchy</h1>
									<p>à 750 m</p>
								</div>
								<div class="text-right">
									<p>Vélos disponibles</p>
									<p><span class="velo-dispo">8</span>/11</p>
								</div>
							</div>
							<div class="borne-container">
								<div class="text-left">
									<h1>Square Arthur Masson</h1>
									<p>à 1.1 km</p>
								</div>
								<div class="text-right">
									<p>Vélos disponibles</p>
									<p><span class="velo-dispo">4</span>/15</p>
								</div>
							</div>
						</div>
						<div class="map-infos map-favoris" style="display:none;">
							<h1>Les bornes fréquemment utilisées</h1>
							<div class="borne-container">
								<div class="text-left">
									<h1>Rue Rogier</h1>
									<p>à 420 m</p>
								</div>
								<div class="text-right">
									<p>Vélos disponibles</p>
									<p><span class="velo-dispo">4</span>/9</p>
								</div>
							</div>
							<div class="borne-container">
								<div class="text-left">
									<h1>Gare de Namur</h1>
									<p>à 1.9 km</p>
								</div>
								<div class="text-right">
									<p>Vélos disponibles</p>
									<p><span class="velo-dispo">6</span>/17</p>
								</div>
							</div>
						</div>
						<footer class="borne-proxi-fav">
							<a href="#" class="map-onglet">Populaire</a>
							<a href="#" class="map-onglet map-onglet-actif">Proximité</a>
						</footer>


					</aside>
					<article id="map"></article>
					<input id="pac-input" class="controls" type="text" placeholder="Search Box">

					
					
				</div>

				<!-- PAGE INDEX -->

				<div class="page page-index process1 process2 process3">
					<article>
						<div class="text-center" style="margin-top:100px;">

							<h2>Libia</h2>
							<p class="grey">Il existe différentes façons de profiter d’un vélo en ville. Choisissez la votre.</p>
							<a href="#" class="bouton-blue btn-louer slide-next btn-process1">louer un vélo</a>
							<a href="#" class="bouton-green btn-code slide-next btn-process2">utiliser un code</a>
							<a href="#" class="text-instruction-debut slide-next btn-process3">Ou scannez votre abonnement sur la borne.</a>
						</div>
					</article>
					<footer class="borne-actuelle">
						<div class="text-left">
							<p>Borne actuelle</p>
							<h1>Porte de Namur</h1>
						</div>
						<div class="text-right">
							<p>Vélos disponibles</p>
							<p><span class="velo-dispo">10</span>/12</p>
						</div>	
					</footer>
				</div>

				<!-- PAGE LOUER -->	

				<div class="page page-louer process1">
					<aside class="panel">
					<div class="map-information">
						<div class="text-left">
							<p>Borne actuelle</p>
							<h1>Porte de Namur</h1>
						</div>
						<div class="text-right">
							<p>Vélos disponibles</p>
							<p><span class="velo-dispo">10</span>/12</p>
						</div>
						<footer class="caution">
							<p>Attention ! Votre carte doit posséder un montant supérieur à <strong>150€</strong>. 
							Cette somme sert de caution, elle vous sera restituée une fois le vélo rendu.</p>
						</footer>
					</div>
					<div class="panel-scan">
						<h1 class="titre-center">Choix de la formule</h1>
						
						<p>Choisissez votre fréquence d’utilisation du vélo, 
						votre achat est valable pour la durée sélectionnée.</p>

						<p>Terminez la procédure en choisissant un <strong>code secret</strong> à quatre chiffres 
						qui servira à vous identifier sur chacune des bornes.</p>
					</div>
				</aside>
				<article>
					<div class="boutons-formule">
						<a href="#" class="bouton bouton-formule bouton-actif-transparent">1 jour<span class="sous-lien">/ 1€</span></a>
						<a href="#" class="bouton bouton-formule">1 semaine<span class="sous-lien">/ 4€</span></a>
					</div>
					<form style="margin-top:20px;width:320px" action="achat.php">
						<label for="code1">Votre code secret</label>
						<input type="password" id="code1" maxlength="4" pattern=".{4,}" required>

						<label for="code2">Confirmer le code secret</label>
						<input type="password" id="code2" maxlength="4" pattern=".{4,}" required>

						<input class="slide-next" type="submit" value="Acheter un ticket">
						<a href=" " class="text-instruction bouton bouton-achat-back slide-prev" style="margin-top:-10px;padding:20px 15px">Retour à l'accueil</a>
					</form>
				</article>
				</div>

				<!-- PAGE ACHAT -->

				<div class="page page-achat process1">
						<aside class="panel">
							<div class="map-information">
								<div class="text-left">
									<p>Borne actuelle</p>
									<h1>Porte de Namur</h1>
								</div>
								<div class="text-right">
									<p>Vélos disponibles</p>
									<p><span class="velo-dispo">10</span>/12</p>
								</div>
							</div>
							<div class="panel-scan">
								<h1 class="titre-center">Acheter mon billet</h1>
								
								<p>Insérez votre carte bancaire et composez votre code.</p>
							</div>
							<footer class="caution">
								<p>Attention ! Votre carte doit posséder un montant supérieur à <strong>150€</strong>. 
								Cette somme sert de caution, elle vous sera restituée une fois le vélo rendu. </p>
							</footer>
						</aside>
						<article class="achat">
							<p>Votre choix du ticket</p>
							<h1 class="duree-formule">1 jour : 1€</h1>
							<p>Valable jusqu'au</p>
							<h1 class="horaire">Lundi 12 octobre, 14h44</h1>
							<div class="adjust-button">
								<a href="choix.php" class="bouton bouton-achat slide-next">Confirmer le paiement</a>
								<a href="choix.php" class="bouton bouton-achat-back slide-prev">Annuler</a>
							</div>
						</article>
				</div>

				<!-- PAGE CONNEXION -->

				<div class="page page-connexion process2">
					<aside class="panel">
						<div class="map-information">
							<div class="text-left">
							<p>Borne actuelle</p>
							<h1>Porte de Namur</h1>
						</div>
						<div class="text-right">
							<p>Vélos disponibles</p>
							<p><span class="velo-dispo">10</span>/12</p>
						</div>
						</div>
						<div class="panel-scan">
							<h1 class="titre-center">Me servir de mon ticket</h1>
							
							<p>Pour vous connecter, vous avez besoin de votre ticket.</p>
							<p>Votre identifiant se trouve en haut de celui-ci et votre mot de passe est le code à quatre chiffres entré lors de la location du vélo.</p>
							<p>Composez cet identifiant et votre code pour choisir un vélo.</p>
						</div>
					</aside>
					<article>
						<form action="choix.php">
							<label for="login">Votre numéro de compte</label>
							<input type="text" id="login">

							<label for="mdp">Votre code</label>
							<input type="password" id="mdp" maxlength="4">

							<input class="slide-next" type="submit" value="Choisir mon vélo" style="width:272px;padding:20px 0;margin-top:50px;">
							<a href=" " class="text-instruction slide-prev" style="margin-top:-10px;padding:20px 36px;">Je n'ai pas de code.</a>
						</form>
					</article>
				</div>

				<!-- PAGE CHOIX -->

				<div class="page page-choix process1 process2 process3">
					<aside class="panel">
						<div class="map-information">
							<div class="text-left">
								<p>Borne actuelle</p>
								<h1>Porte de Namur</h1>
							</div>
							<div class="text-right">
								<p>Vélos disponibles</p>
								<p><span class="velo-dispo">10</span>/12</p>
							</div>
						</div>
						<div class="panel-scan">
							<h1 class="titre-center">Choisissez votre vélo</h1>
							
							<p>Sélectionnez un vélo disponible puis appuyez sur le voyant vert sur le support à droite de celui ci.</p>

						</div>
					</aside>
					<article>
						<div class="ligne-velo">
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">1</a></div>
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">2</a></div>
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">3</a></div>
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">4</a></div>
						</div>
						<div class="ligne-velo">
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">5</a></div>
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">6</a></div>
							<div class="case-velo"><a href="#" class="case-content">7</a></div>
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">8</a></div>
						</div>
						<div class="ligne-velo">
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">9</a></div>
							<div class="case-velo"><a href="#" class="case-content">10</a></div>
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">11</a></div>
							<div class="case-velo"><a href="#" class="case-content velo-dispo slide-next">12</a></div>
						</div>
					</article>
				</div>

				<!-- PAGE BONNE ROUTE -->

				<div class="page page-bonneroute process1 process2 process3">
					<article>
						<div class="anim-terre-container">
							<?php include('./images/earth.svg.php'); include('./images/bike.svg.php'); ?>
							<div class="half--earth"></div>
						</div>

						<div class="text-center-fin">
							<h1>Le vélo numéro <strong class="velo-choisi">01</strong> a été déverrouillé avec succès.</h1> 
							<p class="grey" style="font-size:15px;">Passez une bonne journée et surtout, bonne route !</p>
						</div>
					</article>
					<a href="index.php" class="countdown">Vous allez être redirigé sur le menu principal dans <span class="counter">10</span> secondes</a>
					<footer class="borne-actuelle">
						<div class="text-left">
							<p>borne actuelle</p>
							<h1>Porte de Namur</h1>
						</div>
						<div class="text-right">
							<p>Vélos disponibles</p>
							<p><span class="velo-dispo">9</span>/12</p>
						</div>	
					</footer>
				</div>				





			</div>
		</main>

		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="./js/main.js"></script>
		<script src="./js/map.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDantvsbWyrcyA1y91q_YaYbxEdYyQ876U&callback=initAutocomplete&libraries=places"
         type="text/javascript"></script>
		
	</body>
</html>