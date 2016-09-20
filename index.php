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

<body>
	<div class="site-container">
		<div class="site-pusher">

			<?php include("header.php") ?>

			<div id="container-index" class="site-content site-content-index fade" >
				
					<section class="header-page">
						<h1>MES PASSIONS</br>L'IMAGE ET LE WEB</h1>
					
						<p><span class="resume">J’<strong>analyse et conseille</strong> :</span> vous avez un <strong>projet web</strong> ou <strong>audiovisuel</strong>, je recherche les meilleures solutions</strong> en analysant le marché et me basant sur les bonnes pratiques actuelles.
						</br>
						<p><span class="resume">Je <strong>design</strong> :</span> je créé des <strong>graphismes web</strong> qui vous correspondent, <strong>wireframes</strong>, <strong>maquettes</strong>, <strong>logos</strong>.</p>

						<p><span class="resume">Je <strong>code</strong> :</span> j’<strong>intègre</strong> les <strong>designs</strong> et les <strong>contenus</strong> sur votre <strong>site</strong>.</p>

						<p><span class="resume">Je <strong>film</strong> et je <strong>monte</strong> :</span> Passionné de <strong>photos</strong> et professionnel de  la <strong>vidéo</strong>, je cadre sur tous types d’occasions : <strong>interviews</strong>, <strong>films d’entreprises</strong>, <strong>clips</strong>, <strong>reportages</strong>.</p>
					</section>

					<section id="work">
						<a href="portfolio.php" data-transition="slide">
							<div class="bloc-work">
								<div class="container-project">
									<div class="description">
										<h1>Portfolio</h1>
										<p>Découvrez une partie des travaux que j'ai réalisé en Audiovisuel ainsi que dans le Web
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
						<a href="olivier.php" data-transition="slide">
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
										<p>Hola ! Je m'apelle <strong> Olivier Boucheau </strong> et voici un petit tour d'horizon de ma vie.
										</br>Mes compétences | Mes études | Mes loisirs | Mon CV</p>
									</div>
								</div>

							</div>
						</a>
					</section>
				

				<?php include('footer.php') ?>
				
			</div>


			

            <div class="site-cache" id="site-cache"></div>

		</div>
	</div>


	<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>

</body>
