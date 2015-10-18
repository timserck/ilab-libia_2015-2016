
<!DOCTYPE html>

<html lang="fr">

	

	<head> 
		 <title>Accueil - Libia Vélo</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
		<meta name="apple-mobile-web-app-title" content="Libia">
​
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="height=device-height, initial-scale=1.0">
​
		<meta content="yes" name="apple-mobile-web-app-capable"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0">
		
		<script src="https://use.typekit.net/zch3hag.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	</head>
	
	<body>
		<?php include 'pages/header.php'; ?>

			<?php include 'pages/index.php'; ?>
			<div class="page map">
			<?php include 'pages/map.php'; ?>
				
			</div>
			<div class="page inscription">
			<?php include 'pages/inscription.php'; ?>
			</div>
			<div class="page connect">
			<?php include 'pages/accueil.php'; ?>
			
			</div>
			<div class="page compte">
			<?php include 'pages/compte.php'; ?>
			
			</div>
			<div class="page borne">
			<?php include 'pages/scan.php'; ?>
				
				
			</div>
			

		
		
 		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

 		<script src="js/main.js"></script>



	</body>
</html>
