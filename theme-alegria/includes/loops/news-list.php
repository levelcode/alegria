<?php

	$args = array(
	    'post_type'=> 'post',
	    'order'    => 'ASC',
	    'posts_per_page' => -1
	);
	query_posts( $args );
	while(have_posts()):the_post();
?>
	<article class="news-item">
		<div class="date"><?php the_time('F j, Y'); ?></div>
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink();?>">Leer más</a>
	</article>
<?php
	endwhile;
	wp_reset_postdata();
?>