<!DOCTYPE html>

<?php 
	extract($_GET);
	include('include/bdd.php');
	$bdd = new PDO($dsn, $user, $pass);
	$bdd->exec('SET NAMES utf8');
	$sql = "SELECT * FROM projet WHERE id=".$P;
	$sth = $bdd->query($sql);
	$results = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<html lang="fr">
	<head>
		<title> PORTFOLIO | Portfolio d'Olivier Boucheau | technicien audiovisuel et professionnel du web </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" href="stylesheet/all.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300" rel="stylesheet">
	</head>


<body id="body-single">

	<div class="site-container">

		<div class="site-pusher">

			<?php include("header.php") ?>

			<div class="site-content">
	<?php foreach ($results as $key => $result): ?>
						
					
					<section class="header-page-single">
						<h1> <?php echo $result['name']; ?> </h1>
						
						<div class="link-single">
							<a href="<?php echo $result['url']; ?>" target="_blank"> Website link </a>
						</div>

						<div id="breadcrumb">
							<a href="http://localhost/mon-site/portfolio.php">projects</a> / <a href="#" class="on"><?php echo $result['name']; ?></a>
						</div>
					</section>
				

			<div id="container-single" class="site-content">


				<div id="description-single">

					<ul>
						<li class="list-project-description">
							<h2>DESCRIPTION</h2>
							<p><?php echo $result['description']; ?></p>
						</li>


							<a><?php echo $result['download']; ?>telecharger</a>

						<li class="list-project-description">
							<H3>TECHNOLOGIE</H3>
							<ul class="lists-description">
							
								<li><img src="images/<?php echo $result['technic']; ?>" alt="Technologie"></li>	
							</ul>
						</li>

						<li class="list-project-description">
							<H3>GALLERIE</H3>
							

							<ul class="lists-description gallerie">
								<li><img src="images/<?php echo $result['photo']; ?>" alt="Photos projets">
								</li><img src="images/<?php echo $result['photo2']; ?>" alt="Photos projets"></li>
							</ul>
						</li>

						<div><?php echo $result['video']; ?></div>	

					</ul>
				</div>	
	<?php endforeach; ?>
				
			</div>

					<?php include('footer.php') ?>

				</div>


				

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



</html>