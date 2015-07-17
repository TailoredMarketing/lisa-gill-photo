<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
			<?php
                while( have_posts() ) : 
                        the_post();
						$meta = get_post_meta( $post->ID );
            ?>
        	<div class="col-md-24">
            	<h1>Gift Packages / <strong><?php the_title(); ?>...</strong></h1>
            </div>
        	<div class="col-md-9">
            	<?php 
						the_content(); 
					
				?>
                <div id="package_footer">
                	<!--<a href="<?php echo ( isset( $meta['package_paypal'] ) ? $meta['package_paypal'][0] : '' ); ?>" class="btn btn-primary pull-left">Buy</a>--> <span class="package_price pull-right">&pound;<?php echo ( isset( $meta['package_price'] ) ? number_format( $meta['package_price'][0], 0 ) : '' ); ?> </span>
                </div>
            </div>
        	<div class="col-md-14 col-md-offset-1">
            	<?php 
					the_post_thumbnail( 'full', array( 'class' => 'img-responsive package_image' ) );
					endwhile;
				?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>   