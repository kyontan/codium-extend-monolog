<?php get_header() ?>

<main>
  <h2 class="entry-title"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h2>
  <div class="linebreak clear"></div>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <span <?php body_class('cat-links'); ?>><?php printf(__('%s', 'codium_extend'), get_the_category_list(' ')) ?></span>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div><?php codium_extend_posted_on(); ?></div>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Link to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
    <?php codium_extend_category_list_links() ?>
    <?php codium_extend_tag_list_links() ?>

    <div class="entry-content">
      <?php the_content(''.__('read more <span class="meta-nav">&raquo;</span>', 'codium_extend').''); ?>
      <?php wp_link_pages("      <div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>
    </div>
    <div class="clear"></div>
    <div class="entry-meta">
      <?php codium_extend_permalink() ?><br>
    </div>
  </article>

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
