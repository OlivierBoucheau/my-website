
<!-- 		<header class="header">
				<a href="#" class="header__icon" id="header__icon"></a>
				<nav class="navbar-item">
					<ul id="list-nav">
						<li><a href="http://localhost/mon-site/index.php" class="manuscrite">Olivier Boucheau</a></li>
						<li><a href="http://localhost/mon-site/olivier.php" class="amatic">A PROPOS</a></li>
						<li><a href="http://localhost/mon-site/portfolio.php" class="amatic">PORTFOLIO</a></li>
						<li><a href="http://localhost/mon-site/contact.php" class="amatic">CONTACT</a></li>
					</ul>

					<ul class="social">
						<li><a href="#"><img src="images/instagram.png" alt="insta"></a></li>
						<li><a href="#"><img src="images/linkedin.png" alt="linkedin"></a></li>
					</ul>
				</nav>
		</header> -->

		<header class="header">
			<a href="#" class="header__icon" id="header__icon">  </a>
			<a href="#" class="header__logo">logo</a>
			<nav class="menu">
				<ul id="list-nav">
						<li><a href="http://localhost/mon-site/index.php" class="manuscrite">Olivier Boucheau</a></li>
						<li><a href="http://localhost/mon-site/olivier.php" class="amatic">A PROPOS</a></li>
						<li><a href="http://localhost/mon-site/portfolio.php" class="amatic">PORTFOLIO</a></li>
						<li><a href="http://localhost/mon-site/contact.php" class="amatic">CONTACT</a></li>
					</ul>

					<ul class="social">
						<li><a href="#"><img src="images/instagram.png" alt="insta"></a></li>
						<li><a href="#"><img src="images/linkedin.png" alt="linkedin"></a></li>
					</ul>
			</nav>
		</header>

	<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>
	<script type="text/javascript">
			
			(function($){
				$('#header__icon').click(function(e){
				e.preventDefault();
				$('body').toggleClass('with-sidebar');
				})
			})(jQuery);
	</script>


