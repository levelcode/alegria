<div id="fb-root"></div>
<footer>
	<div class="container-fluid footer">
	    <div class="row">
	    	<div class="col-xs-12">
	    		<img src="<?php bloginfo('template_url')?>/assets/logo_footer.png">
	    	</div>
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
	    			<li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
					<li><a href="http://plus.google.com/"><i class="fa fa-youtube"></i> </a></li>
				</ul>
	    	</div>
			<p>Todos los derechos reservados® Alegria Activity</p>
		</div>
	</div>

    <?php wp_footer(); ?>
</footer>
    
</body>
</html>