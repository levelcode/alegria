<?php
	/*
		Template name: ¿Que Hacemos? Nivel 3
	*/
	get_header();
?>
<div class="container-fluid frase_cont">
    
        <div class="col-xs-12 frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    
</div>
<div class="container-fluid quehacemos_L3">
	<div class="row">
        <div class="col-xs-12 quehacemos_contenedor">
            <h1><?php single_post_title();?></h1>
            <?php
            //wp_get_post_parent_id( $post_ID );
                if(has_post_thumbnail()) {
                     $feature_image = get_the_post_thumbnail($post->ID, 'full'); 
                     echo $feature_image;
                }else{
                    echo "No ha asignado una Imagen Destacada.";
                }
            ?>
            
        </div>
        <div class="col-xs-12">
            <div class="texto">
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