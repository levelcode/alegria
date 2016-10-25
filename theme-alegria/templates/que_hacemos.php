<?php
	/*
		Template name: ¿Que Hacemos?
	*/
	get_header();
?>
<div class="container-fluid quehacemos">
	<div class="row">
        <div class="col-xs-12 hidden-xs frase">
            <div>
                <p class="primera">¿Que Hacemos?</p>
            </div>
            
        </div>
    </div>
    <div class="row">
    	<?php 
    		$postID = get_the_ID();
            $args = array(
            	'post_parent' => $postID,
                'sort_order' => 'asc',
                'sort_column' => 'menu_order',
                'post_status' => 'publish',
                'parent' => 0
            );
            $pages = get_children($args); 
            foreach ( $pages as $page ) {
                $ancho = get_post_meta($page->ID, 'ancho' );
                $fondo = get_post_meta($page->ID, 'fondo' );

                $elemento = '<div class="'.$ancho[0].' '.$fondo[0].' obj_jumbo">';
                $elemento .= '<h1>'.$page->post_title.'</h1>';
                $elemento .= '<div class="ver_mas" data-link="'.get_page_link( $page->ID ).'">ver más</div>';
                $elemento .= '</div>';
                echo $elemento; 
            }  
        ?>
    </div>
</div>
<?php get_footer();?>