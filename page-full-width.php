<?php
/*
Template Name: Full Width (No Sidebar)
*/
global $ID;

?>

<?php get_header(); ?>
			
<header id="header" class="">

  <div class="row header-row">
    <div class="large-12 columns">
      <h1 class="right"><?php echo get_the_title( $ID ); ?></h1>

    </div>
  </div>

</header><!-- /header -->

<section class="main-content">
  
    <div class="row content-row">

     <div class="large-12 medium-12 columns ">
    
        <section class="content-col">

          <article class="full-width-block clearfix">

				<?php get_template_part( 'parts/loop', 'page' ); ?>

          </article> <!-- SINGLE CONTENT BLOCK -->

        </section> <!-- END CONTENT COLUMN -->   
        
     </div> <!-- END MAIN COLUMN -->
       
    </div> <!-- END CONTENT ROW -->


</section> <!-- END MAIN CONTENT -->
    

<?php get_footer(); ?>
