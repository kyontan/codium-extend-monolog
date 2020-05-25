<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<link rel="stylesheet" href="https://cdn.rawgit.com/filipelinhares/ress/master/dist/ress.min.css">
<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

<header>
  <h1 id="blog-title" class="blogtitle"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a></h1>
  <div class="description"><?php bloginfo('description'); ?> </div>
</header>

<div class="clear"></div>

<div id="wrapper" class="container">
  <nav>
    <?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'main-menu',)); ?>
  </nav>
<div class="clear"></div>
