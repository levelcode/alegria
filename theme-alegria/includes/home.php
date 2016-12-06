<!--Home principal-->
<div class="container-fluid home">
    <div class="row frase_row">
        <div class="col-xs-12 frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    </div>
    <div class="row">
        <?php 
            $args = array(
                'sort_order' => 'asc',
                'sort_column' => 'menu_order',
                'post_status' => 'publish',
                'parent' => 0
            );
            $pages = get_pages($args); 
            foreach ( $pages as $page ) {
                $ancho = get_post_meta($page->ID, 'ancho' );
                $fondo = get_the_post_thumbnail_url($page->ID, 'post-thumbnail');
                $icono = get_post_meta($page->ID, 'icono' );
                $subtitulo = get_post_meta($page->ID, 'subtitulo' );

                $elemento = '<div class="'.$ancho[0].' obj_jumbo home_btn" style="background-image:url('.$fondo.')" data-link="'.wp_make_link_relative(get_page_link( $page->ID )).'">';
                $elemento .= '<div class="overlay">';
                $elemento .= '<div class="titulos1">';
                $elemento .= '<div class="icono"><i class="fa '.$icono[0].'"></i></div>';
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

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 portafolio">
        </div>
        <div class="col-xs-12 mapa">
            <div class="img_mapa"><img src="<?php bloginfo('template_url')?>/assets/mapa.png"></div>
            <div class="paises">España <span class="separatas">-</span> Colombia <span class="separatas">-</span> Ecuador <span class="separatas">-</span> México <span class="separatas">-</span> Perú <span class="separatas">-</span> Polonia <span class="separatas">-</span> Marruecos <span class="separatas">-</span> Francia <span class="separatas">-</span> Angola</div>
        </div>
    </div>
</div>

