<?php
    get_header();
    $postID = get_the_ID();
    $post = get_post($postID);
    $fondo = get_the_post_thumbnail_url($page->ID, 'large');
?>

<div class="container-fluid quehacemos_L2">
    <div class="row">
        
        <div class="col-xs-12 col-sm-6 obj_jumbo fullh contenido" style="background-image:url(<?php echo $fondo ?>)">
            
        </div>
        <div class="col-xs-12 col-sm-6 obj_jumbo fullh contenido">
            <div class="texto">
            <h2>NOTICIAS</h2>
            <h2><?php the_title() ?></h2>
            <br>
            <?php 
                $postID = get_the_ID();
                $post = get_post($postID); 
                $content = apply_filters('the_content', $post->post_content); 
                echo '<div class="parr_1">'.$content.'</div>';  
            ?>
            <?php
                $args = array(
                    'post_parent' => $postID,
                    'order'=> 'ASC',
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
<div class="container-fluid frase_cont">
    
        <div class="col-xs-12 frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    
</div>
<?php get_footer();?>