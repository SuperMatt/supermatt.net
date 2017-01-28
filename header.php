<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="https://overpass-30e2.kxcdn.com/overpass.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">

        <?php wp_head(); ?>
    </head>
    <body>
        <div class="headercontainer">
            <div class="container">
                <h1 class="header">
                    DJ SuperMatt
                </h1>
                <h2 class="subheader">The Swingingest DJ in Town</h2>
            </div>
        </div>
        <div class="menucontainer">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu',  menu_class => "menu", container_class =>"container" ) ); ?>
        </div>
