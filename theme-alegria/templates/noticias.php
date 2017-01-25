<?php
	/*
		Template name: Noticias
	*/
	get_header();
?>

<div class="container-fluid quehacemos_L2 noticias-home">
    <div class="row">
        <div class="col-xs-12 col-sm-6 obj_jumbo fullh contenido">
        
        <?php
            if(has_post_thumbnail()) {
                 $feature_image = get_the_post_thumbnail($post->ID, 'full'); 
                 echo $feature_image;
            }else{
                echo "No ha asignado una Imagen Destacada.";
            }
        ?>
            
        </div>
        <div class="col-xs-12 col-sm-6 obj_jumbo fullh contenido">
            <div class="texto">

                <div class="main list-news col-md-8">
                <h2>NOTICIAS</h2>
                    <?php get_template_part('includes/loops/news-list'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid frase_cont">
    <div class="row">
        <div class="col-xs-12 frase">
            <div>
                <p class="primera">Movemos Emociones</p>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer();?>