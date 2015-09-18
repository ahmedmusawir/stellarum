<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">
  <section class="sidebar-col">
     <article class="sidebar-block clearfix">

			<?php if ( is_active_sidebar( 'sidebar-moose' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-moose' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>
        
     </article>   
  </section>
</div>