<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php
    wp_head();
  ?>

  <!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->
  <title>Alex Geer Art</title>
</head>

<body <?php body_class( 'class-name' ); ?>>
  <header class="header">
    <div class="header__container">
      <a href="<?php echo esc_url(site_url()); ?>" class="header__logo">
        <img class="header__img" src="<?php echo get_theme_file_uri('/images/logo-white-300.png'); ?>" alt="Main Logo">
      </a>

      <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="nav-toggle">
        <label for="nav-toggle" class="navigation__button">
          <span class="navigation__icon">&nbsp;</span>
        </label>
        <div class="navigation__background">
          <nav class="navigation__nav">
            <?php
              wp_nav_menu([
                'theme_location' => 'headerMenuLocation',
                // 'menu_class' => 'navigation__list',
                'container' => 'null'
              ]);
            ?>
          </nav>
        </div>
      </div> <!-- navigation -->



    </div>

  </header>

  <main>
