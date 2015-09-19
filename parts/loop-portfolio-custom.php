  <article class="portfolio-block clearfix">

      <div class="portfolio-content large-12 medium-12 columns">

            <h2 class="text-center">Our Creation</h2>

            <section class="large-12 medium-12 columns portfolio-content-nav">

              <?php 

                // wp_nav_menu(array(

                //   'theme_location' => 'category-menu',
                //   'container' => '',
                //   'menu_class' => 'sub-nav portfolio-filter no-bullets',
                //   'menu_id' => 'portfolio-sorting'

                // ));
                    wp_nav_menu(array(

                      'theme_location' => 'category-menu',
                      'menu_class' => 'sub-nav portfolio-filter',
                      'walker' => new Cat_Walker_Nav_Menu()

                    ));

              ?>

               <!-- <dl class="sub-nav portfolio-filter">
                <dt>Filter:</dt>
                <dd class="active"><a href="#" data-filter="*">All</a></dd>
                <dd><a href="#" data-filter=".animation">Animation</a></dd>
                <dd><a href="#" data-filter=".web">Web Design</a></dd>
                <dd><a href="#" data-filter=".photography">Photography</a></dd>
              </dl> -->
            </section>
      <div class="">
        <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-4 portfolio-container">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
                
      <li class="grid-item animation web "><a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('thumbnail', array( 'class' => 'th' )); ?></a></li>
     
      <?php endwhile; ?>  

         </ul>
     </div>

 
          

<?php else : ?>
  <?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>

  </div> <!-- PORTFOLIO CONTENT -->


</article> <!-- SINGLE CONTENT BLOCK -->

  <div class="blog-pagination pagination-centered">

  <?php joints_page_navi(); ?>
    
 </div> <!-- END PAGINATION -->
