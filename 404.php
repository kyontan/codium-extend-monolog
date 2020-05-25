<?php get_header() ?>

<main>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="entry-title"><?php _e( 'Not Found', 'codium_extend' ); ?></h1>
    <div class="entry-content">
      <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'codium_extend' ); ?></p>
      <?php get_search_form(); ?>
    </div><!-- .entry-content -->
  </article>
</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
