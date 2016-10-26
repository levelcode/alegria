<?php
	/*
		Template name: ¿Que Hacemos? Interna
	*/
	get_header();
?>
<div class="container-fluid quehacemos">
	<div class="row">
        <div class="col-xs-12 col-sm-6 obj_jumbo fullh contenido">
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
        <div class="col-xs-12 col-sm-6 obj_jumbo fullh contenido">
            <?php 
                $postID = get_the_ID();
                $post = get_post($postID); 
                $content = apply_filters('the_content', $post->post_content); 
                echo '<div class="texto">'.$content.'</div>';  
            ?>
        </div>
    </div>
</div>
<?php get_footer();?>