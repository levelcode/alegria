<?php
	/*
		Template name: ¿Que Hacemos?
	*/
	get_header();
?>
<div class="container-fluid quehacemos">
    <div class="row">
    	<?php 
    		$postID = get_the_ID();
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