<?php
/*
Template Name: About Page (No Sidebar)
*/
global $ID;

//Custom Fields
$about_block1_header = get_post_meta( 15, 'about_block1-header', true );
$about_block2_header = get_post_meta( 15, 'about_block2-header', true );
$about_block3_header = get_post_meta( 15, 'about_block3-header', true );

//Advanced Custom Fields
$block1_featured_image = get_field('block1_featured_image');
$block1_text_content = get_field('block1_text_content');

$block2_featured_image = get_field('block2_featured_image');
$block2_text_content = get_field('block2_text_content');

$about_block3_html = get_field('about_block3_html');
?>

<?php get_header(); ?>
			
<header id="header" class="">

  <div class="row header-row">
    <div class="large-12 columns">
      <!-- <h1 class="right">ABOUT</h1> -->
      <h1 class="right"><?php echo get_the_title( $ID ); ?> </h1>

    </div>
  </div>

</header><!-- /header -->

<section class="main-content">
  
    <div class="row content-row">

     <div class="large-12 medium-12 columns ">
    
        <section class="content-col">

          <article class="about-block clearfix">

            <div class="large-6 medium-6 columns">

            <?php if ( !empty($block1_featured_image) ) : ?>
              <img class="img-responsive img-top-left" src="<?php echo $block1_featured_image['url']; ?>" alt="<?php echo $block1_featured_image['alt']; ?>">
            <?php endif; ?>  

            </div>
            <div class="about-content large-6 medium-6 columns">
              <h2><?php echo $about_block1_header; ?></h2>
              <!-- <h2>Our History</h2> -->
             
              <p> 
                <?php echo $block1_text_content; ?>
              </p>
           
            </div>
           

          </article> <!-- SINGLE CONTENT BLOCK -->
          <article class="about-block clearfix">

            <div class="about-content large-6 medium-6 columns">
            
              <h2><?php echo $about_block2_header; ?></h2>
              
              <!-- <h2>Our Goal</h2> -->
             
              <p> 
                <?php echo $block2_text_content; ?>
              </p>
           
            </div>
           
            <div class="large-6 medium-6 columns">

            <?php if ( !empty($block1_featured_image) ) : ?>
              <img class="img-responsive img-bottom-right" src="<?php echo $block2_featured_image['url']; ?>" alt="<?php echo $block2_featured_image['alt']; ?>">
            <?php endif; ?>  

            </div>

          </article> <!-- SINGLE CONTENT BLOCK -->
          <article class="about-block clearfix">

            <div class="about-content large-12 medium-12 columns">

              <h2 class="text-center"><?php echo $about_block3_header; ?></h2>

              <!-- <h2 class="text-center">Our Partners</h2> -->
             
              <?php echo $about_block3_html; ?>
           
            </div>
       


          </article> <!-- SINGLE CONTENT BLOCK -->

        </section> <!-- END CONTENT COLUMN -->   
        
     </div> <!-- END MAIN COLUMN -->
       
    </div> <!-- END CONTENT ROW -->


</section> <!-- END MAIN CONTENT -->
    

<?php get_footer(); ?>
