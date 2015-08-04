<?php
/*
Template Name: Packages Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<div class="col-md-9">
            	<?php 
					while( have_posts() ) : 
						the_post();
						the_content(); 
					endwhile;
				?>
            </div>
        	<div class="col-md-14 col-md-offset-1 packages">
            	<?php
					$term = wp_get_post_terms($post->ID, 'slider-cat', array("fields" => "all"));
					$args = array(
						'post_type'        => 'packages',
						'orderby'		   => 'menu_order',
						'posts_per_page'   => -1,
					);
					if( !is_front_page() ) {
						$args['tax_query'] = array(
							array(
							  'taxonomy' => 'slider-cat',
							  'field' => 'id',
							  'terms' => $term[0]->term_id, // Where term_id of Term 1 is "1".
							)
						);	
					}
					$posts_array = get_posts( $args );
					$i = 0;
					foreach( $posts_array as $package ) {
						$price = get_post_meta( $package->ID, 'package_price', true );
						if( $i == 0 ) {
							echo '<div class="row">';
						}
				?>
                	<div class="col-md-8 package_list">
                   		<h2 class="center-block"><a href="<?php echo get_permalink( $package->ID ); ?>"><?php echo get_the_post_thumbnail( $package->ID,  array( 200, 200 ), array( 'class' => 'img-responsive package_image' ) ); ?></a></h2>
                        <h2 class="text-center"><a href="<?php echo get_permalink( $package->ID ); ?>"><?php echo get_the_title( $package->ID ); ?></a></h2>
                        <h3 class="text-center"><a href="<?php echo get_permalink( $package->ID ); ?>">&pound;<?php echo number_format( $price, 0 ); ?></a></h3>
                    </div>
                <?php 
						$i++;
						if( $i == 3 || $i == count( $posts_array ) ) {
							$i = 0;
							echo '</div>';
						}
					}
				?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>   