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

          <article class="portfolio-block clearfix">

            <div class="portfolio-content large-12 medium-12 columns">

                  <h2 class="text-center">Our Creation</h2>

                  <nav class="large-12 medium-12 columns">
                  
                  <?php 
                       wp_nav_menu(array(

                      'theme_location' => 'category-menu',
                      'menu_class' => 'sub-nav portfolio-filter',
                      'walker' => new Cat_Walker_Nav_Menu()

                    ));

                  ?>
                  </nav>

               
                     
               <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-4 portfolio-container">

                  <li class="grid-item all zen-art atheist "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-1.jpg"></a></li>
                  <li class="grid-item all zen-art uncategorized "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-2.jpg"></a></li>
                  <li class="grid-item all web uncatagorized "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-3.jpg"></a></li>
                  <li class="grid-item all animation "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-4.jpg"></a></li>
                  <li class="grid-item all web uncategorized "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-5.jpg"></a></li>
                  <li class="grid-item all zen-art atheist "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-6.jpg"></a></li>
                  <li class="grid-item all zen-art atheist "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-7.jpg"></a></li>
                  <li class="grid-item all web uncategorized "><a href="#" title=""><img class="th" src="assets/images/portfolio-img-8.jpg"></a></li>

                </ul>
     
            </div> <!-- PORTFOLIO CONTENT -->

          </article> <!-- SINGLE CONTENT BLOCK -->

          <div class="blog-pagination pagination-centered">

            <ul class="pagination">
              <li class="arrow unavailable"><a href="">&laquo;</a></li>
              <li class="current"><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li class="unavailable"><a href="">&hellip;</a></li>
              <li><a href="">12</a></li>
              <li><a href="">13</a></li>
              <li class="arrow"><a href="">&raquo;</a></li>
            </ul>
            
          </div> <!-- END PAGINATION -->

        </section> <!-- END CONTENT COLUMN -->   
        
     </div> <!-- END MAIN COLUMN -->
       
    </div> <!-- END CONTENT ROW -->


</section> <!-- END MAIN CONTENT -->
    

<?php get_footer(); ?>
