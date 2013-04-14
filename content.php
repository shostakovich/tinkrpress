<article class="hentry" role="article">
  <header>
  	<h1 class="entry-title">
      <?php if (is_single()): ?>
        <?php the_title(); ?>
      <?php else: ?>
      	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <?php endif; ?>
    </h1>
  <p class="meta">
     <time datetime="{<?php the_time();?>" pubdate><?php the_time(get_option( 'date_format' )) ?></time>
     | <a href="<?php the_permalink(); ?>"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
  </p>
  </header>

  <div class="entry-content">
    <?php if (is_single()): ?>
      <?php the_content();?>
    <?php else: ?>
      <?php the_content('(Read more...)'); ?>
    <?php endif; ?>
 </div>

  <?php if(is_single()):?>
	  <footer>
	    <p class="meta">
		      <span class="byline author vcard">
		      	Posted by <span class="fn">
		      	  <?php the_author() ?>
		        </span>
		      </span>

			<time datetime="{<?php the_time();?>" pubdate>
				<?php the_time(get_option( 'date_format' )) ?>
			</time>

			<span class="categories"><?php the_tags(''); ?></span>
	    </p>
	  </footer>
  <?php endif; ?>
</article>
<section>
<?php if (is_single()): ?>
  <?php comments_template(); ?>
<?php endif;?>
</section>