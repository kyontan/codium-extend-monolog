<?php
/*
Template Name: archives
*/
?>
<?php get_header(); ?>

<main id="archive">
  <?php $query = new WP_Query('showposts=-1'); ?>
  <?php if ($query->have_posts()) : ?>
  <?php $query->rewind_posts(); while ($query->have_posts()) : $query->the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div><?php codium_extend_posted_on(); ?></div>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Link to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
    <?php codium_extend_category_list_links() ?>
    <?php codium_extend_tag_list_links() ?>
    <div class="archive-meta"></div>
  </div>
  <?php endwhile; endif ?>

  <div class="center">
  <?php if(function_exists('wp_pagenavi')) {
    wp_pagenavi();
  } else { ?>
    <div class="navigation mobileoff"><p><?php posts_nav_link(" "); ?></p></div>
  <?php } ?>
    <div class="navigation_mobile"><p><?php posts_nav_link(" "); ?></p></div>
  </div>
</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
