<?php include "header.php"; 
global $ID;

?>
 
<header id="header" class="">

  <div class="row header-row">
    <div class="large-12 columns">
      <h1 class="right"><?php echo get_the_title( $ID ); ?> </h1>
      <!-- <h1 class="right">Single Post</h1> -->
    </div>
  </div>

</header><!-- /header -->

<section class="main-content">
  
    <div class="row content-row">

     <div class="large-8 medium-8 columns ">
    
	        <section class="content-col">

	        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

        </section>    
        
     </div>

          <?php get_sidebar(); ?>
        
    </div>


</section>
    

 <?php include "footer.php" ?>
