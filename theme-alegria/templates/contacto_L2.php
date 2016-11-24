<?php
    /*
        Template name: Contacto Nivel 2
    */
    get_header();

    $postID = get_the_ID();
    $post = get_post($postID); 
    $mapa = get_the_post_thumbnail_url($post->ID, 'post-thumbnail');
?>
<div class="container-fluid frase_cont">
    
        <div class="col-xs-12 frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    
</div>
<div class="container-fluid contacto">
    <div class="row">
        <div class="col-xs-12 col-sm-4 obj_jumbo fullh hidden-xs contacto_l2" style="background-image:url(<?php echo $mapa; ?>)">    
        </div>
        <div class="col-xs-12 col-sm-8 obj_jumbo fullh contacto_l2">
            <div class="texto">
            <h2>CONTACTO</h2>
            
            <?php
                $content = apply_filters('the_content', $post->post_content); 
                echo '<div class="parr_1">'.$content.'</div>';
            ?>
            
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>