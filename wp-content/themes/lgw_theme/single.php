<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<?php
				while( have_posts() ) : 
					the_post();
			?>
        	<div class="col-md-24 single_header">
            	<?php 
					if ( get_the_post_thumbnail() != '' ) {
						echo '<div class="has_thumb">';
							the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
							echo '<h1>'.get_the_title().'</h1>';
						echo '</div>';
					}  else {
						echo '<h1>'.get_the_title().'</h1>';	
					}
				?>
            </div>
            <div class="col-md-16">
            	<article>
                	<header>
                    	<?php tailored_post_meta(); ?>
                    </header>
					<?php the_content(); ?>
                    <?php comments_template(); ?>
                </article>
            </div>
            
            <div class="col-md-7 col-md-offset-1">
            	<?php get_sidebar(); ?>
            </div>
        	<?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>   