<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
    <nav style="color: #7999cd" class="navbar navbar-expand-md navbar" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'techhub-syd' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img id ="logofooter" src="<?php echo get_stylesheet_directory_uri() ?>/img/Untitled-1.svg" alt="" width="70" height="70"> </a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'header-menu-location',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

                </div>
            </div>
        </nav>

    </header>