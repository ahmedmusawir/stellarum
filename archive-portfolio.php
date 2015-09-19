<?php get_header(); ?>
 
<header id="header" class="">

  <div class="row header-row">
    <div class="large-12 columns">
      <h1 class="right"><?php the_archive_title();?></h1>
      <!-- <h1 class="right"><?php //echo get_the_title( $ID ); ?> </h1> -->

    </div>
  </div>

</header><!-- /header -->

<section class="main-content">
  
    <div class="row content-row">

     <div class="large-12 medium-12 columns ">
    
        <section class="content-col">

          <?php get_template_part( 'parts/loop', 'portfolio-custom' ); ?>

        </section>    
        
     </div>

          <?php // get_sidebar(); ?>
     
    </div>

</section>
    
<?php get_footer(); ?>

