<?php
	/*
		Template name: Casos de Exito
	*/
	get_header();
?>

<div class="container-fluid success">
    <div class="row">
        <?php
            //Sidebar Query
            while(have_posts()):the_post();

            //Get url of thumbnail
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            $url = $thumb['0'];
        ?>
        <div class="banner" style="background-image: url(<?php echo $url; ?>)">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <?php
            endwhile;
            wp_reset_postdata();
        ?>

        <div class="main list-cases clearfix no-gutter">
            <?php get_template_part('includes/loops/cases-list'); ?>
        </div>
    </div>
</div>
<div class="container-fluid frase_cont">
    
        <div class="col-xs-12 frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    
</div>
<?php get_footer();?>