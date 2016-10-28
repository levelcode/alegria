<?php
	$args = array(
	    'post_type'=> 'caso-exito',
	    'order'    => 'ASC',
	    'posts_per_page' => -1
	);
	query_posts( $args );
	while(have_posts()):the_post();
	//Get url of thumbnail
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $url = $thumb['0'];
?>
	<article class="case-item col-md-3" style="background-image: url(<?php echo $url; ?>)">
		<h3><?php the_title(); ?></h3>
		<a href="<?php the_permalink();?>">Ver más</a>
	</article>
<?php
	endwhile;
	wp_reset_postdata();
?>