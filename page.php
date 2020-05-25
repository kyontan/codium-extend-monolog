<?php get_header() ?>

<main>

<?php the_post() ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php codium_extend_category_list_links() ?>
    <?php codium_extend_tag_list_links() ?>
    <div class="linebreak clear"></div>
    <div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages("          <div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>

<div class="clear"></div>
<?php edit_post_link(__('Edit', 'codium_extend'),'<span class="edit-link">','</span>') ?>

    </div>
  </div><!-- .post -->

<?php comments_template(); ?>

</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
