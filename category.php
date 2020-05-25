<?php get_header( ); ?>
<main>
  <h1 class="page-title"><?php
      printf( __( '%s カテゴリのアーカイブ', 'codium_extend' ), '<span>' . single_cat_title( '', false ) . '</span>' );
  ?></h1>
  <div class="linebreak clear"></div>

  <?php
    $category_description = category_description();
    if ( ! empty( $category_description ) )
      echo '<div class="entry-content">' . $category_description . '</div><div class="linebreak clear"></div>';
  ?>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <!-- Begin post -->
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
    <div><?php codium_extend_posted_on(); ?></div>
    <?php codium_extend_category_list_links() ?>
    <?php codium_extend_tag_list_links() ?>

    <div class="entry-content">
      <?php the_content(''.__('read more <span class="meta-nav">&raquo;</span>', 'codium_extend').''); ?>
      <?php wp_link_pages("<div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>
    </div>
    <div class="clear"></div>
    <div class="entry-meta">
      <a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>" rel="bookmark"><?php printf(__('Permalink', 'codium_extend')) ?></a> <span class="meta-sep">|</span>
    </div>
  </div>
  <!-- End post -->

  <div class="linebreak clear"></div>

  <?php endwhile; endif ?>

  <div class="center">
    <?php if(function_exists('wp_pagenavi')) {
      wp_pagenavi();
    } else {?>
      <div class="navigation mobileoff"><p><?php posts_nav_link(); ?></p></div>
    <?php } ?>
    <div class="navigation_mobile"><p><?php posts_nav_link(); ?></p></div>
  </div>

</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
