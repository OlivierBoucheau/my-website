<!DOCTYPE html>

<html lang="fr">
	<head>
		<title> Olivier Boucheau | Biographie et présentation du Scratto | Webdesigner intégrateur web caméraman monteur vidéo photographe surfeur et amateur de chocolat</title>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" href="stylesheet/all.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300" rel="stylesheet">
		<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>
	</head>


<body id="body-olivier">
	<div class="site-container">
		<div class="site-pusher">

			<?php include("header.php") ?>

			<div id="container-olivier" class="site-content site-content-olivier fade">
				
					<section class="header-page">
						<h1>OLIVIER "Scratto" BOUCHEAU</h1>
						<h2>Technicien audiovisuel / Professionnel du web / Amateur de chocolat et de pizzas.</h2>
						<h3>BTS Audiovisuel + License conception et réalisation de produits en ligne.</h3>
					</section>

					<section id="photo-mobile">
						
					</section>

					<section id="professionnel">
						<div class="photo-olivier-1">
							<!-- photo in css -->
						</div>

						<div class="contenu-olivier-pro">
							<h1>PRO</h1>
							<p>De retour en Metropole depuis 2009, j'ai développé mes compétences audiovisuelles qui m'ont permis de décrocher plusieurs emplois serieux comme à TV7 Bordeaux en tant que technicien de diffusion, caméraman et monteur, puis à Ericsson Broadcast à Paris où j'ai été embauché comme technicien supérieur de diffusion.</p>
							<p>Suite à cela j'ai eu une période de transition et ai continué dans l'audiovisuel en freelance en même temps qu'un poste dans la maintenance technique d'appareils electroniques à Montpellier</p>
							<p>J'ai ensuite pris la décision de recommencer des études dans le web, à l'ECOD, école des Gobelins de Bordeaux où j'ai passé avec succès une license en création et réalisation de produit en ligne. </br>
							J'ai appris à créer de A à Z un site internet en tenant compte des enjeux techniques, graphiques, marketing de référencement et d'accéssibilités.</p>

							<p>Pour finir, je continue ma petite route professionnelle en suivant mes passions: l'image, la vidéo, la photo, le montage, le design et le web.</p>

							<p><a class="ancre" href="#ancreCV">Je vous laisse le soin d'étudier mon CV ici.</a></p>
						</div>
					</section>

					<section id="personnel">
						<div class="contenu-olivier-perso">
							<h1>PERSONNEL</h1>
							<p>Je suis né le 30 Août 1986 à Bordeaux, j'ai grandi une petite partie de ma vie en Afrique, une moyenne partie à Toulon et une grande partie dans les Caraibes.</p>
							<p>Touche à tout, j'ai pratiqué beaucoup de sports mais ma grande passion reste le Surf que j'aime surtout pratiquer depuis une dizaine d'années avec mon frère et mes amis.</p>
							<p>J'aime beaucoup voyager que ce soit dans mon pays comme à l'étranger.</p>
							<p>J'adore la musique, je pratique la guitare depuis une dizaine d'année également, j'ai appris en autodidacte et je ne m'en passe plus depuis. J'adore le blues, le jazz, le raggae mais surtout le rock.</p>
							<p>Mon travail oblige, je suis aussi passioné d'image, que ce soit vidéo ou photo, j'adore composer, chercher de nouveaux angles et prendre les plus belles images possible. Je fais également beaucoup de montages de mes films personnels.</p>
							<div id="ancreCV"></div>
						</div>

						<div class="photo-olivier-2">
							<!-- image in css -->
						</div>
					</section>

						

						<div id="link-cv">
							
								<div class="CTA cta-en">
									<a href="">
										<h2>Download my cover</h2>
									</a>
								</div>
							
								<div class="CTA cta-fr">
									<a href="">
										<h2>Télécharger mon CV</h2>
									</a>
								</div>
							
						</div>

						<div class="linkedin">
							<a href="https://fr.linkedin.com/in/olivier-boucheau-1b615097">
								<img src="images/icon-link.png" alt="logo et lien vers profil linkedin d'olivier boucheau">
							</a>
						</div>
					</div>

					<?php include('footer.php') ?>



				

				<div class="site-cache" id="site-cache"></div>
			</div>
		</div>
	</div>

</body>

<script type="text/javascript">
	<script type="text/javascript">
		
		(function($){
			$('#header__icon').click(function(e){
			e.preventDefault();
			$('body').toggleClass('with-sidebar')
		})
		})(jQuery);
		</script>
</script>

<script>
	$(document).ready(function() {
		$('.ancre').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});
</script>

</html>