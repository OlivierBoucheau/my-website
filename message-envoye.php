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



<?php 
	$message = $_POST['message'];
	$headers = 'FROM: site@local.com';
	$from = $_POST['name'];
	mail('olivier.boucheau@gmail.com', 'formulaire de contact', $message, $from);
 ?>

<body id="body-contact">
	<div class="site-container">
		<div class="site-pusher">

			<?php include("header.php") ?>



			<div id="containerContact" class="site-content">
				<div class="message-envoye">
					<p>Bonjour <?php echo htmlspecialchars($_POST['name']) ?>, votre message a bien été envoyé, merci beaucoup je reviendrais vers vous le plus vite possible.</p>

					<a href="index.php">Retour à l'accueil</a>
				</div>
			<?php include('footer.php') ?>
			
			</div>



            <div class="site-cache" id="site-cache"></div>

		</div>
	</div>


</body>
