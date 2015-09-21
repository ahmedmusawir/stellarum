  <article class="portfolio-block clearfix">

      <div class="portfolio-content large-12 medium-12 columns">

            <h2 class="text-center">Our Creation</h2>

            <section class="large-12 medium-12 columns portfolio-content-nav">

              <?php 

            
                    wp_nav_menu(array(

                      'theme_location' => 'category-menu',
                      'menu_class' => 'sub-nav portfolio-filter',
                      'walker' => new Cat_Walker_Nav_Menu()

                    ));

              ?>

            </section>
      <div class="">
        <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-4 portfolio-container">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php 
          $categories = get_the_category();

          // print_r( $categories );

          if ( $categories ) {
            $class_names[] = array();

            foreach ( $categories as $category ) {

              $class_names[] = 'cat-' . $category->slug;

            }

            $classes = join( ' ', $class_names );

            unset( $class_names );
            


          }

        ?>
      
                
            <li class="grid-item all <?php echo $classes; ?> "><a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('thumbnail', array( 'class' => 'th' )); ?></a></li>
     

      <?php endwhile; ?>  

        </ul>
     </div>

 
          

<?php else : ?>
  <?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>

  </div> <!-- PORTFOLIO CONTENT -->



</article> <!-- SINGLE CONTENT BLOCK -->

  <div class="blog-pagination pagination-centered">

  <?php  joints_page_navi(); ?>
    
 </div> <!-- END PAGINATION -->

            
