<?php get_header(); ?>

<header id="header" class="">

  <div class="row header-row">
    <div class="large-12 columns">

	  <h1 class="archive-title right"><span><?php _e('Search Results for:', 'jointstheme'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

    </div>
  </div>

</header><!-- /header -->
	
	<div class="main-content">

		<div class="row content-row">
	
			<div class="large-8 medium-8 columns first" role="main">

				<section class="content-col">

						<div class="blog-index-block">
							

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
								<article class="blog-index-content clearfix" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
									<header class="article-header">

										<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
											<?php get_template_part( 'parts/content', 'byline' ); ?>
							
									</header> <!-- end article header -->
						
									<section class="entry-content">
										<?php the_excerpt('<button class="tiny">Read more...</button>'); ?> 
										<?php //the_content('<button class="tiny">Read more...</button>'); ?> 
									</section> <!-- end article section -->
							
									<footer class="article-footer">
								
									</footer> <!-- end article footer -->
						
								</article> <!-- end article -->
						
							<?php endwhile; ?>	

 							<div class="blog-pagination pagination-centered">
						
							        <?php joints_page_navi(); ?>	

							</div>
						
						    <?php else : ?>
						
							    <article class="blog-index-content clearfix" id="post-not-found" class="hentry clearfix">
							    	<header class="article-header">
							    		<h1>Sorry, No Results.</h1>
							    	</header>
							    	<section class="entry-content">
							    		<p>Try your search again.</p>
							    	</section>
							    	<section class="search">
	                           			<p><?php get_search_form(); ?></p>
	        		                </section> <!-- end search section -->
							    	<footer class="article-footer">
							    	    <!-- <p>This is the error message in the search.php template.</p> -->
							    	</footer>
							    </article>
						
						    <?php endif; ?>

					    </div>

				</section>
	
		    </div> <!-- end #main -->
		
		    <?php get_sidebar(); ?>
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
