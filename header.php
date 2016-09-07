
			<header class="header">
                <a href="#" class="header__icon" id="header__icon"></a>
                <nav class="menu">
                    <ul class="item-menu">
                        <li><a href="index.php" class="menu-home">OLIVIER BOUCHEAU</a></li>
                        <li><a href="olivier.php" class="menu-moi">A PROPOS</a></li>
                        <li><a href="portfolio.php" class="menu-portfolio">PORTFOLIO</a></li>
                        <li><a href="contact.php" class="menu-contact">CONTACT</a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="https://fr.linkedin.com/in/olivier-boucheau-1b615097" target="_blank"><img src="images/linkedin.png"></a></li>
                        <li><a href="https://www.instagram.com/olive_972/" target="_blank"><img src="images/instagram.png"></a></li>
                    </ul>
                </nav>
            </header>


	<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>
	<script type="text/javascript">
			
		(function($){

	    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
	    $('#header__icon').click(function(e){
	        e.preventDefault();
	        $('body').toggleClass('with-sidebar');
	    });

	    /* Je veux pouvoir masquer le menu si on clique sur le cache */
	    $('#site-cache').click(function(e){
	        $('body').removeClass('with-sidebar');
	    })

		})(jQuery);

	</script>