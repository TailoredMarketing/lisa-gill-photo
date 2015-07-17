<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<div class="col-md-24 ">
            	<?php 
					while( have_posts() ) : 
						the_post();
				?>
                	<div class="row testirow">
                    	<div class="col-md-5">
                        	<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
								} else {
									echo '<img src="'.esc_url( get_stylesheet_directory_uri() ).'/img/logo.png" class="img-responsive">';
								}
							?>
                        </div>
                        <div class="col-md-18 col-md-offset-1 testimonial">
                        	<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
                        </div>
                    </div>
                <?php						
					endwhile;
				?>
                <?php wp_pagenavi(); ?>
            </div>
        	
        </div>
    </div>
<?php get_footer(); ?>   