<?php
    get_header()
?>

<div class="container-fluid news-main no-gutter">
    <div class="row">

    <?php
        //Sidebar Query
        while(have_posts()):the_post();
    ?>
    <div class="first-container">
        <div class="container">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    </div>

    <div class="second-container">+
        <div class="container">
            <?php echo types_render_field('second-box'); ?>
        </div>
    </div>

    <?php
        endwhile;
        wp_reset_postdata();
    ?>
    </div>
</div>

<?php
    get_footer();
?>