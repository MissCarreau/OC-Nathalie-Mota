<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-header__inner">
        <div class="site-header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Nathalie Mota — Accueil">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/nathalie-mota-logo.svg'); ?>" alt="Nathalie Mota">
            </a>
        </div>

        <button class="menu-toggle" type="button" aria-controls="main-navigation" aria-expanded="false" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="main-navigation" class="site-navigation" aria-label="Navigation principale">
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => 'site-menu',
                'fallback_cb'    => false,
                'depth'          => 1,
            ]);
            ?>
        </nav>
    </div>
</header>