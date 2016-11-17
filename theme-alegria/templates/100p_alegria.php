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
            ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>