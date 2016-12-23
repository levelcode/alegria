<?php
	/*
		Template name: 100% Alegría
	*/
	get_header();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 alegria-100p">
            <div class="texto">
            <?php 
                $postID = get_the_ID();
                $post = get_post($postID); 
                $content = apply_filters('the_content', $post->post_content); 
                echo '<div class="parr_1">'.$content.'</div>';

                $args = array(
                    'post_parent' => $postID,
                    'sort_order' => 'desc',
                    'sort_column' => 'menu_order',
                    'post_status' => 'publish',
                    'parent' => 0
                );
                $i = 0;
                $pages = get_children($args); 
                foreach ( $pages as $page ) {
                    $i++;
                    $ancho = get_post_meta($page->ID, 'ancho' );
                    $fondo = get_the_post_thumbnail_url($page->ID, 'post-thumbnail');
                    $subtitulo = get_post_meta($page->ID, 'subtitulo' );

                    $elemento = '<div class="'.$ancho[0].' '.$fondo[0].' obj_jumbo fullh" id="obj'.$i.'" data-link="'.get_page_link( $page->ID ).'" style="background-image:url('.$fondo.')">';
                    $elemento .= '<div class="overlay">';
                    $elemento .= '<div class="titulos1">';
                    $elemento .= '<div class="titulos2">';
                    $elemento .= '<h1>'.$page->post_title.'</h1>';
                    $elemento .= '<p>'.$subtitulo[0].'</p>';
                    $elemento .= '</div>';
                    $elemento .= '</div>';
                    $elemento .= '</div>';
                    $elemento .= '</div>';
                    
                    echo $elemento; 
                }



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