<?php
/*
Template Name: Galleries Page
*/
?>
<?php get_header(); 
		$i = 0;
		$n = 0;
?>
<?php 
	global $post;
	$term = wp_get_post_terms($post->ID, 'slider-cat', array("fields" => "all"));
	$args = array(
		'post_type' 		=> 'galleries',
		'posts_per_page' 	=> -1,
		'orderby'			=> 'date',
		'order'				=> 'desc',
		'tax_query' => array(
			array(
			  'taxonomy' => 'slider-cat',
			  'field' => 'id',
			  'terms' => $term[0]->term_id, // Where term_id of Term 1 is "1".
			)
		)
	);
	$posts = get_posts( $args );
	
?>
	<div id="content" class="container">
    	<div class="row">
        	<div class="col-md-24">
            	<?php 
				foreach( $posts as $gallery ) {
					$post = $gallery;
					setup_postdata( $post );
					if( $i == 0 ) { ?>
						<div class="row">
                        	<div class="col-md-24">
                            	<h1 class="gallery_title"><?php the_title(); ?></h1>
								<?php the_content(); ?>
                            </div>
                        </div>	
                        
                        
				<?php	
                    } else { ?>
						<?php if ( $n == 0 ) echo '<div class="row">'; ?>
                        	<div class="col-md-6">
                            	<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>
                        <?php 
							if ( $n == 3 || $i == count( $posts ) -1  ) {
								echo '</div>';
								$n = 0; 
							} else {
								$n ++;	
							}
						?>	
                <?php
					} ?>
					
                <?php    
					$i ++;
				};
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