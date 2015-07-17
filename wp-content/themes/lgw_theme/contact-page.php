<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        <?php 
			while( have_posts() ) : 
				the_post();
		?>
        	<div class="col-md-24"><h1><?php the_title(); ?></h1></div>
        	<div class="col-md-16 ">
            	
						<?php the_content(); ?>
					
            </div>
        <?php
			endwhile;
		?>
        	<div class="col-md-7 col-md-offset-1 ">
            	<?php dynamic_sidebar( 'contact_sidebar' ); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>   