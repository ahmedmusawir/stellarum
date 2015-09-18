<?php get_header(); 
global $ID;

?>

 
<header id="header" class="">

  <div class="row header-row">
    <div class="large-12 columns">
    <h1 class="right"><?php echo get_the_title( $ID ); ?></h1>
      <!-- <h1 class="right">Single Page</h1> -->
    </div>
  </div>

</header><!-- /header -->

<section class="main-content">
  
    <div class="row content-row">

       <div class="large-8 medium-8 columns ">
      
          <section class="content-col">

            <?php get_template_part( 'parts/loop', 'page' ); ?>

          </section>    
          
       </div>

          <?php get_sidebar('contact'); ?>

   
    </div>




</section>
    
<?php get_footer(); ?>
