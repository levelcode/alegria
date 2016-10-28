<?php
	/*
		Template name: Noticias
	*/
	get_header();
?>
<div class="container-fluid news-main no-gutter">
    <div class="row">

    <?php
        //Sidebar Query
        while(have_posts()):the_post();

        //Get url of thumbnail
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $url = $thumb['0'];
    ?>
        <div class="side-news col-md-4" style="background-image: url(<?php echo $url; ?>);">
            <h2><?php the_title();?></h2>
         </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>

    <!--
        News list
    -->
    <div class="main list-news col-md-8">
        <?php get_template_part('includes/loops/news-list'); ?>
    </div>
        
    </div>
</div>
<?php get_footer();?>