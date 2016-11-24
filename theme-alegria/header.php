<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- keywords -->
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<!-- title -->
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <div class="loader" style="width: 100%;height: 100%;background-color: rgb(190, 4, 17); z-index: 10000;display:none">
        <div class="loader_center"></div>
    </div>
    <header>    
        <section class="logo-menu">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-tag">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( has_custom_logo()): the_custom_logo(); else: ?>
                                <h1 class="site-title" style="color:<?php echo "#". $header_text_color;?>"><?php echo bloginfo( 'name' ); ?></h1>
                                <h2 class="site-description" style="color:<?php echo "#". $header_text_color;?>"><?php bloginfo('description'); ?></h2>
                            <?php endif; ?></a>                     
                            
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    
                        <form  class="navbar-form navbar-right hidden-xs" role="search">
                            <ul class="nav pull-right">
                                <li>
                                    <div class="main-search">
                                        <button class="btn btn-search" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                          <i class="fa fa-search"></i>
                                        </button>
                                        <div class="search-box collapse" id="collapseExample">
                                                <div class="well search-well">
                                                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                    <input type="text" class="form-control" placeholder="Buscar" value="<?php echo get_search_query(); ?>" name="s">
                                                </form>
                                                </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
                                    <a title="EN" href="/en">EN</a>
                                </li>
                                
                            </ul>
                        </form>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'principal',
                                'depth'             => 2,
                                'container'         => 'div',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div> <!-- /.end of collaspe navbar-collaspe -->
                </div> <!-- /.end of container -->
            </nav>
        </section> <!-- /.end of section -->
        <div class="breadcrumbs hidden-xs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    </header>