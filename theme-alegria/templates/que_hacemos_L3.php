<?php
	/*
		Template name: ¿Que Hacemos? Nivel 3
	*/
	get_header();
?>
<div class="container-fluid quehacemos_L3">
	<div class="row">
        <div class="col-xs-12 col-sm-4 obj_jumbo fullh contenido">
        <h1><?php single_post_title();?></h1>
        <?php
            if(has_post_thumbnail()) {
                 $feature_image = get_the_post_thumbnail($post->ID, 'full'); 
                 echo $feature_image;
            }else{
                echo "No ha asignado una Imagen Destacada.";
            }
        ?>
            
        </div>
        <div class="col-xs-12 col-sm-8 obj_jumbo fullh contenido">
            <div class="texto">
            <h2><?php the_title() ?></h2> 
            <?php 
                $postID = get_the_ID();
                $post = get_post($postID); 
                $content = apply_filters('the_content', $post->post_content); 
                echo '<div class="parr_1">'.$content.'</div>';  
            ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>