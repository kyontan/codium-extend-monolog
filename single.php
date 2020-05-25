<?php get_header() ?>

<main>
  <?php the_post(); ?>
  <div id="nav-above" class="navigation cf">
    <div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
    <div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
  </div>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Link to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
    <div><?php codium_extend_posted_on(); ?></div>
    <?php codium_extend_category_list_links() ?>
    <?php codium_extend_tag_list_links() ?>

    <div class="linebreak"></div>
    <div class="entry-content">
      <?php the_content(''.__('', 'codium_extend').''); ?>
      <div class="clear"></div>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'codium_extend' ), 'after' => '</div>' ) ); ?>

      <?php if (is_single() && function_exists('wp23_related_posts') ) { ?>
        <?php wp23_related_posts(); ?>
      <?php } ?>
    </div>
    <div class="entry-meta">
      <?php codium_extend_permalink() ?><br>
    </div>

    <div class="clear"></div>
  </div><!-- .post -->

  <div class="linebreak"></div>

  <div id="nav-below" class="navigation">
    <div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
    <div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
  </div>

  <?php  comments_template(); ?>
</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
