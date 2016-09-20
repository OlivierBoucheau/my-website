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
		<?php foreach ($results as $key => $result): ?>
		<title> PORTFOLIO Olivier Boucheau | fiche projet <?php echo $result['name'];?> | <?php echo $result['poste'];?></title>
		<?php endforeach; ?>
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

					<p>Pour plus d'informations rendez-vous sur </p>
					<a href="https://fr.linkedin.com/in/olivier-boucheau-1b615097" target="_blank"><img src="images/linke-footer.png"></a>

					<ul>
						<li class="list-project-description">
							<h2>DESCRIPTION</h2>
							<p><?php echo $result['description']; ?></p>
						</li>



						<li class="list-project-description">
							<H3>TECHNOLOGIE</H3>
							<ul class="lists-description-technic">
								<li> <p><?php echo $result['technic']; ?> </p></li>	
							</ul>
						</li>

						<li class="list-project-description">
							<H3>GALLERIE</H3>
							

							<ul class="lists-description gallerie">
								<li><a href="images/<?php echo $result['photo']; ?>" target="_blank"><img src="images/<?php echo $result['photo']; ?>" alt="Photos projets"></a>
								</li><a href="images/<?php echo $result['photo-2']?>" target="_blank"><img src="images/<?php echo $result['photo-2']; ?>" alt="Photos projets"></a></li>
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