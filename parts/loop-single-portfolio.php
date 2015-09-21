<article class="blog-single-block clearfix <?php post_class(''); ?>" id="post-<?php the_ID(); ?>"  role="article">

    <div class="large-12 medium-12 columns">

      <?php the_post_thumbnail('single-post'); ?>

    </div>
    <div class="blog-single-content large-12 medium-12 columns">
  
      <!-- <h2 class="entry-title single-title" itemprop="headline"><?php //the_title(); ?></h2> -->

      <p id="portfolio-byline">
        <small>
          <?php get_template_part( 'parts/content', 'byline-portfolio' ); ?>
        </small>
      <p>
          <?php the_content(); ?>
    
    </div>
   
  <footer class="article-footer">
    <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p> 
  </footer> <!-- end article footer -->
                  
  <?php comments_template(); ?> 
                  
</article>