<?php
    /*
        Template name: Contacto
    */
    get_header();

    $postID = get_the_ID();
    $post = get_post($postID); 
    $mapa = get_the_post_thumbnail_url($post->ID, 'post-thumbnail');
?>
<div class="container-fluid frase_cont">
    
        <div class="col-xs-12 hidden-xs frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    
</div>
<div class="container-fluid contacto">
    <div class="row">
        <div class="col-xs-12 col-sm-4 obj_jumbo hidden-xs fullh contacto_l2" style="background-image:url(<?php echo $mapa ?>)">    
        </div>
        <div class="col-xs-12 col-sm-8 obj_jumbo fullh contacto_l2">
            <div class="texto">
            <h2>Contacto</h2> 
            <?php
                $content = apply_filters('the_content', $post->post_content); 
                echo '<div class="parr_1">'.$content.'</div>';

                $args = array(
                    'post_parent' => $postID,
                    'order'=> 'DESC',
                    'sort_column' => 'menu_order',
                    'post_status' => 'publish',
                    'parent' => 0
                );
                $pages = get_children($args);
                $elemento = "";
                
                foreach ( $pages as $page ) {
                    $elemento .= '<a class="link_bullet" href="'.get_page_link( $page->ID ).'">';
                    $elemento .= get_the_post_thumbnail($page->ID, 'thumbnail');
                    $elemento .= '<p>'.$page->post_title.'</p>';
                    $elemento .= '</a>';
                } 
                echo $elemento; 
            ?>
            
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>