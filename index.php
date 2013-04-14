<?php get_header(); ?>

  <div id="main">
    <div id="content">
      <div>
      <?php if ( have_posts() ) : ?>      
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
      <?php endif; ?>
        

      </div>
      <aside class="sidebar thirds">
        <?php dynamic_sidebar(); ?>
      </aside>
    </div>
  </div>



<?php echo get_footer(); ?>