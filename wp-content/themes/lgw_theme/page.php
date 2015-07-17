<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<div class="col-md-24 ">
            	<?php 
					while( have_posts() ) : 
						the_post();
						the_content(); 
					endwhile;
				?>
            </div>
        	
        </div>
    </div>
<?php get_footer(); ?>   