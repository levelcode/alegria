<div id="fb-root"></div>
<footer>
	<div class="container-fluid footer">
	    <div class="row">
	    	<div class="col-xs-12 hidden-xs">
	    		<?php
                    wp_nav_menu( array(
                        'menu'              => 'footer',
                        'depth'             => 2,
                        'container'         => 'div',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
	    	</div>
	    	<div class="col-xs-12 social-footer">
	    		<ul>
	    			<li><a href="https://www.instagram.com/alegriaactivity/"><i class="fa fa-instagram"></i></a></li>
	    			<li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
					<li><a href="http://plus.google.com/"><i class="fa fa-youtube"></i> </a></li>
				</ul>
	    	</div>
			<p>COPYRIGHT © 2016 ALEGRIA ACTIVITY. Todos los Derechos Reservados <br> Prohibida su reproducción total o parcial, así como su traducción a cualquier idioma sin autorización escrita de su titular. <a href="http://lacasaaccesible.es/?page_id=47">Términos y Condiciones</a></p>
		</div>
	</div>

    <?php wp_footer(); ?>
</footer>
    
</body>
</html>