<?php get_header( ); ?>
<main>
  <h1 class="page-title"><?php printf( __( '%s の検索結果', 'codium_extend' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div><?php codium_extend_posted_on(); ?></div>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
    <?php codium_extend_category_list_links() ?>
    <?php codium_extend_tag_list_links() ?>

    <div class="entry-content">
      <?php the_content(''.__('read more <span class="meta-nav">&raquo;</span>', 'codium_extend').''); ?>
      <?php wp_link_pages("<div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>
    </div>
    <div class="clear"></div>
    <div class="entry-meta">
      <?php codium_extend_permalink() ?><br>
    </div>
  </article>

  <div class="linebreak"></div>

  <?php endwhile; ?>

  <div class="center">
    <?php if(function_exists('wp_pagenavi')) {
      wp_pagenavi();
    } else {?>
      <div class="navigation mobileoff"><p><?php posts_nav_link(" "); ?></p></div>
       <?php } ?>
      <div class="navigation_mobile"><p><?php posts_nav_link(" "); ?></p></div>
  </div>

<?php else : ?>
<article id="post-0" class="post no-results not-found">
  <h2 class="entry-title"><?php _e( 'Nothing Found', 'codium_extend' ); ?></h2>
  <div class="entry-content">
    <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'codium_extend' ); ?></p>
    <?php get_search_form(); ?>
  </div><!-- .entry-content -->
</article>
<?php endif; ?>

</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
