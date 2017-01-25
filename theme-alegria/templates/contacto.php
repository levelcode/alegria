<?php
    /*
        Template name: Contacto
    */
    get_header();

    $postID = get_the_ID();
    $post = get_post($postID); 
    $mapa = get_the_post_thumbnail_url($post->ID, 'large');
?>

<div class="container-fluid contacto">
    <div class="row">
        <div class="col-xs-12 col-sm-6 obj_jumbo hidden-xs fullh contacto_l2" style="background-image:url(<?php echo $mapa ?>)">    
        </div>
        <div class="col-xs-12 col-sm-6 obj_jumbo fullh contacto_l2">
            <div class="texto">
            <h2>Contacto</h2>
            <h4>Seleccione su país</h4> 
            <?php
                $args = array(
                    'post_parent' => 14,
                    'order'=> 'ASC',
                    'orderby' => 'menu_order', 
                    'post_status' => 'publish',
                    'parent' => 0
                );
                $pages = get_children($args);

                $elemento_l = '<div id="contacto-link"><ul>';
                foreach ( $pages as $page ) {
                    $link = get_page_link( $page->ID );
                    $titulo = $page->post_title;
                    $elemento_l .= '<li><a href="'.$link.'">'.$titulo.'</a></li>';
                } 
                $elemento_l .= '</ul></div>';

                $elemento = '<select id="contacto-select">';
                foreach ( $pages as $page ) {
                    $link = get_page_link( $page->ID );
                    $titulo = $page->post_title;
                    $elemento .= '<option value="'.$link.'">'.$titulo.'</option>';
                } 
                $elemento .= '</select>';
                

                $content = apply_filters('the_content', $post->post_content);
                $formulario = do_shortcode( '[contact-form-7 id="472" title="Global"]' );
                echo '<div class="parr_1">'.$elemento_l.'<p></p>'.$content.'<br>'.$formulario.'</div>';
            ?>
            
            </div>
        </div>
    </div>
</div>
<div class="container-fluid frase_cont">
    
        <div class="col-xs-12 hidden-xs frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    
</div>
<?php get_footer();?>