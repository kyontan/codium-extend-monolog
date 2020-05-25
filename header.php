<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<script src="//typesquare.com/3/tsst/script/ja/typesquare.js?cj4l1q-4Otw%3D" charset="utf-8"></script>
<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

<header>
  <h1 id="blog-title" class="blogtitle"><a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a></h1>
  <div class="description"><?php bloginfo('description'); ?> </div>
</header>
<div class="clear"></div>
<div id="wrapper" class="container">
  <div id="access">
    <?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'main-menu',)); ?>
  </div><!--  #access -->
<div class="clear"></div>
