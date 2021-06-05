<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
    <?php wp_head(); ?>
    <header class="site-header">
      <div class="container header-grid">
        <div class="navigation-bar">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">   
                 <img src="<?php echo get_theme_file_uri('/img/logo.svg')  ?>" alt="logo">
                </a>
            </div>  <!-- .logo -->
            <?php 
            
              $args   =   array (
                
                'theme_location'  =>    'main-menu',
                'container'       =>    'nav',
                'container_class' =>    'main-menu'

              );

              wp_nav_menu($args);
            
            ?>
      </div>    <!-- .navigation -->
    </div><!-- .container -->
 </header>   <!-- .site-header -->


    