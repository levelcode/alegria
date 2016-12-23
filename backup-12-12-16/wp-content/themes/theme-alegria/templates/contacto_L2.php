<?php
    /*
        Template name: Contacto Nivel 2
    */
    get_header();

    $postID = get_the_ID();
    $post = get_post($postID); 
    $mapa = get_the_post_thumbnail_url($post->ID, 'post-thumbnail');
?>

<div class="container-fluid contacto">
    <div class="row">
        <div class="col-xs-12 col-sm-4 obj_jumbo fullh hidden-xs contacto_l2" style="background-image:url(<?php echo $mapa; ?>)">    
        </div>
        <div class="col-xs-12 col-sm-8 obj_jumbo fullh contacto_l2">
            <div class="texto">
            <h2>Contacto</h2>
            <?php
                $args = array(
                    'post_parent' => 14,
                    'order'=> 'DESC',
                    'sort_column' => 'menu_order',
                    'post_status' => 'publish',
                    'parent' => 0
                );
                $pages = get_children($args);
                $elemento = '<select id="contacto-select">';
                foreach ( $pages as $page ) {
                    $link = get_page_link( $page->ID );
                    $titulo = $page->post_title;
                    $elemento .= '<option value="'.$link.'">'.$titulo.'</option>';
                } 
                $elemento .= '</select>';

                $url_actual = get_permalink();
                $elemento_wl = str_replace('"'.$url_actual.'"', '"'.$url_actual.'" selected', $elemento);

                

                $content = apply_filters('the_content', $post->post_content);

                $content_wl = str_replace('<div role="form"', '<br>'.$elemento_wl.'<br>'.'<div role="form"', $content);

                echo '<div class="parr_1">'.$content_wl.'</div>';
            ?>
            
            </div>
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