<!DOCTYPE html>

<?php 

	include('include/bdd.php');
	$bdd = new PDO($dsn, $user, $pass);
	$bdd->exec('SET NAMES utf8');
	$sql = "SELECT * FROM projet";
	$sth = $bdd->query($sql);
	$results = $sth->fetchAll(PDO::FETCH_ASSOC);
	

?>

<html lang="fr">
	<head>
		<title> PORTFOLIO | Portfolio d'Olivier Boucheau | technicien audiovisuel et professionnel du web </title>
		<meta charset="ISO-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" href="stylesheet/all.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300" rel="stylesheet">
		<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>
	</head>

<body>
	<div class="site-container">
		<div class="site-pusher">

			<?php include('header.php') ?>
			
			<div id="container-portfolio" class="site-content site-content-portfolio fade">

				<section class="header-page">
					<h1>PORTFOLIO</h1>
					<h2>Mes projets et travaux audiovisuels et web</h2>
					<h3>Vidéo - photo - montage - diffusion  - conception site internet - webdesign - intégration</h3>
				</section>


				<div id="all-project">
					<section class="row-projet">
						<?php foreach ($results as $key => $result) : ?>
							<a href="single-project.php?P=<?php echo $result['id']; ?>" class="bloc-projet">
								<div class="contenu-projet">

									<div class="photo-projet">
										<img class="lazy" src="images/<?php echo $result['logo']; ?>" alt="<?php echo $result['name']; ?>">
									</div>

									<div class="description-projet">
										<h1><?php echo $result['name']; ?></h1>
										<h2>POSTE</h2>
										<P><?php echo $result['poste']; ?></P>
									
									</div>
								</div>
							</a>
						<?php endforeach; ?>
							<a href="contact.php" class="bloc-projet">
								<div class="contenu-projet">

									<div class="photo-projet">
										<img src="images/vous.png" alt="logo point d'interrogation">
									</div>

									<div class="description-projet">
										<h1>VOUS ?</h1>
										<h2>POSTE</h2>
										<P>Ce que vous voulez : contactez moi en cliquant ici</P>
									
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



</body>

</html>
