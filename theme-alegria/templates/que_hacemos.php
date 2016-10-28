<?php
	/*
		Template name: ¿Que Hacemos?
	*/
	get_header();
    $postID = get_the_ID();

    $post = get_post($postID);
    $titulo = isset( $post->post_title ) ? $post->post_title : '';
    $subtitulo = get_post_meta($post->ID, 'subtitulo' );

?>
<div class="container-fluid quehacemos">  
    <div class="row">
        <div class="col-xs-12 hidden-xs fullh modal_intro">
            <div class="modal_intro_texto">
                <h1><?php echo $titulo;?></h1>
                <hr>
                <p><?php echo $subtitulo[0];?></p>
            </div>
        </div>
    	<?php 
    		
            $args = array(
            	'post_parent' => $postID,
                'sort_order' => 'desc',
                'sort_column' => 'menu_order',
                'post_status' => 'publish',
                'parent' => 0
            );
            $pages = get_children($args); 
            foreach ( $pages as $page ) {
                $ancho = get_post_meta($page->ID, 'ancho' );
                $fondo = get_post_meta($page->ID, 'fondo' );

                $elemento = '<div class="'.$ancho[0].' '.$fondo[0].' obj_jumbo fullh" data-link="'.get_page_link( $page->ID ).'">';
                $elemento .= '<div class="titulos1">';
                $elemento .= '<div class="titulos2">';
                $elemento .= '<h1>'.$page->post_title.'</h1>';
                $elemento .= '<p>'.$subtitulo[0].'</p>';
                $elemento .= '</div>';
                $elemento .= '</div>';
                if(get_the_post_thumbnail($page->ID, 'full'))
                {
                    $elemento .= get_the_post_thumbnail($page->ID, 'full');
                }
                $elemento .= '</div>';
                echo $elemento; 
            }  
        ?>
    </div>
</div>
<?php get_footer();?>