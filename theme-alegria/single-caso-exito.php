<?php
    get_header();

    while(have_posts()):the_post();
?>
<div class="container-fluid frase_cont">
    
        <div class="col-xs-12 frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    
</div>
<div class="container-fluid quehacemos_L3">
    <div class="row">
        <div class="col-xs-12 quehacemos_contenedor">
            <h1><?php the_title();?></h1>
            <?php
            echo types_render_field('second-box');
            ?>
            
        </div>
        <div class="col-xs-12">
            <div class="texto">
            <?php 
                $content = the_content(); 
                echo '<div class="parr_1">'.$content.'</div>';  
            ?>
            </div>
        </div>
    </div>
</div>
<?php 
    endwhile;
    wp_reset_postdata();
    get_footer();
?>