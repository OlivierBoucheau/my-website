<!DOCTYPE html>

<html lang="fr">
	<head>
		<title> ACCUEIL | page d'accueil du site de Olivier Boucheau | technicien audiovisuel et professionnel du web </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" href="stylesheet/all.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300" rel="stylesheet">
	</head>

</html>

<body id="body-home">

	<div class="site-container">

		<div class="site-pusher">

			<?php include("header.php") ?>

			<div class="site-content">
				<div class="container">
					<section class="header-page">
						<h1>MES PASSIONS</br>L'IMAGE ET LE WEB</h1>
					</section>

					<section id="work">
						<a href="portfolio.php">
							<div class="bloc-work">
								<div class="container-project">
									<div class="description">
										<h1>Portfolio</h1>
										<p>Découvrez une partie des travaux que j'ai pu réaliser en Audiovisuel ainsi que dans le Web
										</br> <strong>Intégration Web</strong> | <strong>Conception</strong> | <strong>Webdesign</strong> | <strong>UX-design</strong> | <strong>Montage</strong> | <strong>Vidéo</strong> | <strong>Photo</strong> | <strong>DIffusion</strong> | <strong>Réalisation</strong></p>
									</div>

									<div class="bloc-photo-1"><!-- 
						  				image in css -->
						  			</div>	
								</div>
							</div>
						</a>
					</section>

					<section id="about">
						<a href="olivier.php">
							<div class="bloc-about">
								<div class="container-project">
									<div class="bloc-photo-2">
						  				<div class="image-bloc">
						  					<div class="fading-image"></div>
						  					<!-- image in css -->
						  				</div>
						  			</div>
						  			
									<div class="description">
										<h1>Mon Chemin</h1>
										<p>Hola ! je m'apelle Olivier Boucheau et voici un petit tour d'horizon de ma vie </br> Attention contenu egocentrique </p>
										</br><strong>Mes compétences</strong> | <strong>Mes études</strong> | <strong>Mes loisirs</strong> | <strong>Mon CV</strong></p>
									</div>
								</div>

							</div>
						</a>
					</section>
				</div>

				<?php include('footer.php') ?>
				
			</div>


			

            <div class="site-cache" id="site-cache"></div>

		</div>
	</div>


	<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>

</body>
