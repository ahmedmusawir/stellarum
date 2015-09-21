<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article class="page-single-block clearfix <?php post_class(''); ?>" id="post-<?php the_ID(); ?>">

    <div class="large-12 medium-12 columns">

      <?php the_post_thumbnail('full-width'); ?>

    </div>
    <div class="page-single-content large-12 medium-12 columns">

      <!-- <h2 class="page-title"><?php // the_title(); ?></h2> -->

        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
     
    </div>
   
    <footer class="article-footer">
      
    </footer> <!-- end article footer -->
                  
    <?php //comments_template(); ?>

  </article>

<?php endwhile; endif; ?>             
        
  