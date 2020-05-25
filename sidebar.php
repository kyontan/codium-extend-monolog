<aside id="sidebar">
	<nav id="nav-side">
	  <?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'main-menu',)); ?>
	</nav>

  <ul>
  <?php if ( is_active_sidebar( 'sidebartop' ) ) : ?>
    <?php dynamic_sidebar( 'sidebartop' ); ?>
  <?php endif; // end primary sidebar widgets  ?>
  </ul>
</aside>
