<?php get_header(); ?>
<?php 

//Advanced Custom Fields
// FRONTPAGE HEADER
$fp_header_button_url = get_field('fp_header_button_url');
$fp_header_image = get_field('fp_header_image');
// FRONTPAGE BLOCK 1
$fp_block1_text_content_title = get_field('fp_block1_text_content_title');
$fp_block1_text_content_title_link = get_field('fp_block1_text_content_title_link');
$fp_block1_text_content = get_field('fp_block1_text_content');
$fp_block1_vimeo_video_id = get_field('fp_block1_vimeo_video_id');

// FRONTPAGE BLOCK 1
$fp_block2_text_content_title = get_field('fp_block2_text_content_title');
$fp_block2_text_content_title_link = get_field('fp_block2_text_content_title_link');
$fp_block2_text_button_text = get_field('fp_block2_text_button_text');
$fp_block2_text_button_link = get_field('fp_block2_text_button_link');
$fp_block2_text_content = get_field('fp_block2_text_content');
$fp_block2_vimeo_video1_id = get_field('fp_block2_vimeo_video1_id');
$fp_block2_vimeo_video2_id = get_field('fp_block2_vimeo_video2_id');

//FRONTPAGE TESTIMONIALS
$fb_testimonial_text = get_field('fb_testimonial_text');
echo '<h1>' . $fb_testimonial_text . '</h1>';


?>

<style type="text/css" media="screen">

  header.frontpage-header {
      background: url(<?php echo $fp_header_image['url']; ?>) no-repeat center center fixed; 
      /*background: url(images/frontpage-galaxy-4.jpg) no-repeat center center fixed; */
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

</style>
 
<header id="header-frontpage" class="frontpage-header">

  <div class="row frontpage-header-row">
    <div class="large-12 columns text-center">
      <h1><?php bloginfo('name'); ?></h1>
      <!-- <h1>Stellarum</h1> -->
      <h4><?php bloginfo('description'); ?></h4>
      <!-- <h4>There is nothing divine in the vast emptiness ... </h4> -->
      
      <a href="<?php echo $fp_header_button_url; ?>" class="button large round" title=""><i class="fa fa-chevron-circle-down fa-2x"></i></a>

    </div>
  </div>

</header><!-- /header -->

<section id="index" class="main-content">

  <div class="frontpage-background-block-1">
    
    <div class="row content-row">
    
          <article class="frontpage-block-1 clearfix">

            <div class="frontpage-content-1 large-7 large-push-5 medium-7 medium-push-5  columns">
              
              <h3><a href="<?php echo $fp_block1_text_content_title_link; ?>" title=""><?php echo $fp_block1_text_content_title; ?></a></h3>
              <!-- <h3><a href="#" title="">Article Title</a></h3> -->
              
              <p>
                <?php echo $fp_block1_text_content; ?>
                
              </p>
            </div>

            <div class="large-5 large-pull-7 medium-5 medium-pull-7 columns">

              <div class="flex-video widescreen vimeo">
                <!-- <iframe src="http://player.vimeo.com/video/136114837" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
                <!-- <iframe src="//player.vimeo.com/video/39822385?title=0&amp;byline=0&amp;portrait=0" style="width: 100%; height: auto; border: 0;" allowfullscreen></iframe> -->
                <iframe src="//player.vimeo.com/video/<?php echo $fp_block1_vimeo_video_id; ?>?title=0&amp;byline=0&amp;portrait=0" style="width: 100%; height: auto; border: 0;" allowfullscreen></iframe>
              </div>

            </div>
            
            <!-- <a href="#" class="button right" title="">Read More</a> -->

          </article>

        
    </div> <!-- CONTENT ROW -->

  </div> <!-- FRONTPAGE-BACKGROUND-BLOCK-1 -->

  <div class="frontpage-background-block-2">
    
    <div class="row content-row">
    
          <article class="frontpage-block-2 clearfix">


            <div class="frontpage-content-2 large-7 medium-7 columns">
              <h3><a href="<?php echo $fp_block2_text_content_title_link ?>" title=""><?php echo $fp_block2_text_content_title ?></a></h3>
              <!-- <h3><a href="#" title="">Article Title</a></h3> -->
             
              <p>
                <?php echo $fp_block2_text_content; ?>
              </p>
              <a href="<?php echo $fp_block2_text_button_link; ?>" class="button right" title=""><?php echo $fp_block2_text_button_text; ?></a>

            </div>

             <div class="large-5 medium-5 columns">

              <div class="flex-video widescreen vimeo">
                <!-- <iframe src="http://player.vimeo.com/video/136114837?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
                <!-- <iframe src="//player.vimeo.com/video/35565030?title=0&amp;byline=0&amp;portrait=0" style="width: 100%; height: auto; border: 0;" allowfullscreen></iframe> -->
                <iframe src="//player.vimeo.com/video/<?php echo $fp_block2_vimeo_video1_id; ?>?title=0&amp;byline=0&amp;portrait=0" style="width: 100%; height: auto; border: 0;" allowfullscreen></iframe>
              </div>
              <div class="flex-video widescreen vimeo">
                <!-- <iframe src="http://player.vimeo.com/video/113142476?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
                <!-- <iframe src="//player.vimeo.com/video/113142476?title=0&amp;byline=0&amp;portrait=0" style="width: 100%; height: auto; border: 0;" allowfullscreen></iframe> -->
                <iframe src="//player.vimeo.com/video/<?php echo $fp_block2_vimeo_video2_id; ?>?title=0&amp;byline=0&amp;portrait=0" style="width: 100%; height: auto; border: 0;" allowfullscreen></iframe>
              </div>

            </div>

          </article>

        
    </div> <!-- CONTENT ROW -->

  </div> <!-- FRONTPAGE-BACKGROUND-BLOCK-2 -->

  <div class="frontpage-background-block-3">
    
      <div class="row content-row">

      <?php 
      /**
       *
       * Display Service Articles
       *
       */
      $args = array(

          'post_type' => 'services',
          'posts_per_page' => 4,
          'orderby' => 'rand'
      );

      $services = new WP_Query( $args );


      ?>
    
          <ul class="frontpage-block-3 medium-block-grid-2 large-block-grid-2">

          <?php while( $services->have_posts() ) : $services->the_post(); ?>

            
            <li class="frontpage-content-3 ">

              <h3><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h3>
              <p>
                <small>
                  <?php get_template_part( 'parts/content', 'byline' ); ?>
                </small>
              </p>
              <p>
              <p>
               <?php the_excerpt(); ?> 
              </p>
              <!-- <a href="#" class="button right" title="">Read More</a> -->

            </li>

          <?php endwhile; ?>
           
          </ul>

          <?php wp_reset_query(); ?>
        
      </div> <!-- CONTENT ROW -->

  </div> <!-- FRONTPAGE-BACKGROUND-BLOCK-3 -->

  <div class="frontpage-background-block-4">
    
    <div class="row content-row">

     <?php 
      /**
       *
       * Display Service Articles
       *
       */
      $args = array(

          'post_type' => 'testimonials',
          'posts_per_page' => 4,
          'orderby' => 'rand'
      );
      
      $testimonials = new WP_Query( $args );

      ?>
    
          <ul class="frontpage-block-4 small-block-grid-1 medium-block-grid-2 large-block-grid-4">

          <?php while( $testimonials->have_posts() ) : $testimonials->the_post(); ?>


            <li class="frontpage-content-4 large-7 medium-12 columns">
              <p class="text-center">
                <?php the_post_thumbnail('thumbnail', array( 'class' => 'th' )); ?>
                <!-- <img class="th" src="http://lorempixel.com/100/100/people/1" alt=""> -->
              <p>
              <blockquote>
               <?php the_excerpt(); ?> 
               
                <br>
                <br>
                <cite><?php the_title(); ?> </cite>
              </blockquote>

            </li>

          <?php endwhile; ?>

            <!-- <li class="frontpage-content-4 large-7 medium-12 columns">
              <p class="text-center">
                <img class="th" src="http://lorempixel.com/100/100/people/7" alt="">
              <p>
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. 
                <br>
                <br>
                <cite>CEO HTMLfiveDev.com </cite>
              </blockquote>

            </li>
            <li class="frontpage-content-4 large-7 medium-12 columns">
              <p class="text-center">
                <img class="th" src="http://lorempixel.com/100/100/people/8" alt="">
              <p>
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. 
                <br>
                <br>
                <cite>CEO HTMLfiveDev.com </cite>
              </blockquote>

            </li>
            <li class="frontpage-content-4 large-7 medium-12 columns">
              <p class="text-center">
                <img class="th" src="http://lorempixel.com/100/100/people/9" alt="">
              <p>
              <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. 
                <br>
                <br>
                <cite>CEO HTMLfiveDev.com </cite>
              </blockquote>

            </li> -->
            
          </ul>

          <?php wp_reset_query(); ?>
        
    </div> <!-- CONTENT ROW -->

  </div> <!-- FRONTPAGE-BACKGROUND-BLOCK-2 -->


  <div class="frontpage-background-block-1">
    
    <div class="row content-row">
    
          <article class="frontpage-block-1 clearfix">

            <div class="large-5 medium-5 columns">
              <!-- <a class="" href="#" title=""><img class="img-responsive" src="images/blog-img-1.jpeg" alt=""></a> -->
              <!-- <a class="" href="#" title=""><img class="img-responsive" src="http://lorempixel.com/640/640/abstract/6" alt=""></a> -->
            </div>
            <div class="frontpage-content-1 large-12 medium-12 columns text-center">
              <h2>Subscribe Now</h2>
              
              <form action="" method="get" accept-charset="utf-8">

              <input type="text" name="" value="" placeholder="Your Email">
              <input class="button" type="submit">
                            
              </form>
            </div>
            

          </article>

        
    </div> <!-- CONTENT ROW -->

  </div> <!-- FRONTPAGE-BACKGROUND-BLOCK-1 -->

</section> <!-- MAIN CONTENT -->
    


<?php get_footer(); ?>

