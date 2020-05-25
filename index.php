<?php get_header( ); ?>
<main id="index">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <!-- Begin post -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div><?php codium_extend_posted_on(); ?></div>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Link to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
    <?php codium_extend_category_list_links() ?>
    <?php codium_extend_tag_list_links() ?>
    <div class="entry-content">
      <?php the_content(''.__('read more <span class="meta-nav">&raquo;</span>', 'codium_extend').''); ?>
      <?php wp_link_pages("      <div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>
    </div>
    <div class="entry-excerpt">
      <a href="<?php the_permalink() ?>">
        <?php the_excerpt(); ?>
      </a>
    </div>
  </article>
  <!-- End post -->
  <div class="linebreak"></div>
  <?php endwhile; endif ?>

  <div class="center">

    <?php if(function_exists('wp_pagenavi')) {
      wp_pagenavi();
    } else {?>
      <div class="navigation mobileoff"><p><?php posts_nav_link(" "); ?></p></div>
    <?php } ?>

    <div class="navigation_mobile"><p><?php posts_nav_link(" "); ?></p></div>

  </div>
</main>
<?php get_sidebar() ?>
<?php get_footer() ?>
