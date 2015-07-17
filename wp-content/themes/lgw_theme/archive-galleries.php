<?php get_header(); 
		$i = 0;
?>
	<div id="content" class="container">
    	<div class="row">
        	<div class="col-md-24">
            	<?php 
				while( have_posts() ) : 
				the_post();
					if( $i == 0 ) { ?>
						<div class="row">
                        	<div class="col-md-24">
                            	<h1 class="gallery_title"><?php the_title(); ?></h1>
								<?php the_content(); ?>
                            </div>
                        </div>	
                        <hr>
                        <div class="row">
                        	<div class="col-md-6">
                            	<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        
				<?php	
                    } else { ?>
						
                        	<div class="col-md-6">
                            	<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        	
                <?php
					} ?>
					
                <?php    
					$i ++;
				endwhile;
				?>
                <div class="col-md-24">
					<?php wp_pagenavi(); ?>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php 
	get_footer(); 
?>   