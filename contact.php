<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Olivier Boucheau | Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" href="stylesheet/all.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300" rel="stylesheet">
	<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>

</head>

<body id="body-contact">
	<div class="site-container">
		<div class="site-pusher">

			<?php include("header.php") ?>

			<div id="containerContact" class="site-content">
				<section class="header-page">
					<h1>CONTACT</h1>
					<h2>Particulier ou une entreprise, vous avez un projet de site web, vous avez besoin de créer du contenu audiovisuel ou seulement besoin d'un conseil ?</br>
					N'hesitez pas</h2>
					<h3> Je ne mords pas :)</h3>
					
				</section>
				
				<div id="flex-contact">
					<section class="introContact">
						
						<h2>Mes Coordonnées</h2>
						<p><a "tel:+33638418604">+33 (0)6 38 41 86 04</a></p>
						<p><a href="mailto:olivier.boucheau@gmail.com">olivier.boucheau@gmail.com</a></p>
						<p>Vous pouvez également m'envoyer un message via le formulaire de contact. </p>
					</section>

					<section class="formulaire">
						<p class="etoile">Les champs marqués d'une étoile <span>*</span> sont obligatoires.</p>
						<form action="message-envoye.php" method="post" action="envoi.php"> 
							<div class="champs">
								<label for="societe">Société</label>
								<input type="text" name="societe" id="societe"/>
							</div>
							
							<div class="champs">
								<label for="name">Nom / Prénom <span>*</span></label>
								<input type="text" name="name" id="name" required/>
							</div>

							<div class="champs">
								<label for="email">e-mail <span>*</span></label>
								<input type="email" name="email" id="email" required/>
							</div>

							<div class="champs">
								<label for="tel">Telephone</label>
								<input type="tel" name="tel" id="tel"/>
							</div>

							<div class="champs">
								<label for="ville">ville <span>*</span></label>
								<input type="text" name="ville" id="ville" required/>
							</div>



							<div class="champs">
								<label for="message">Message <span>*</span></label>
								<textarea size="260" name="message" id="message" required></textarea>
							</div>

							<div class="submit">
								<input type="submit" class="styleSubmit"></input>
							</div>

						</form>
					</section>

				</div>
				
			<?php include('footer.php') ?>
			</div>



            <div class="site-cache" id="site-cache"></div>

		</div>
	</div>


</body>
