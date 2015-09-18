<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
  <article class="blog-index-block clearfix">

    <?php if ( has_post_thumbnail() ) : ?>

      <div class="large-5 medium-5 columns">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>
      </div>
      <div class="blog-index-content large-7 medium-7 columns">
    
      <h3>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h3>

      <p>
        <small class="text-center">
          <?php get_template_part( 'parts/content', 'byline' ); ?>
        </small>
      <p>
      <?php echo get_the_excerpt(); ?>

    </div>

    <?php else: ?>

    <div class="blog-index-content large-12 medium-12 columns">

      <h3>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h3>

      <p>
        <small>
          <?php get_template_part( 'parts/content', 'byline' ); ?>
        </small>
      <p>
      <?php echo get_the_excerpt(); ?>

    </div>

    <?php endif; ?>

  </article>
<?php endwhile; ?>  

 <div class="blog-pagination pagination-centered">

  <?php joints_page_navi(); ?>
    
 </div> <!-- END PAGINATION -->
          

<?php else : ?>
  <?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>