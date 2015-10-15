<?php get_header(); ?>
	
    <div class="featured gallery container">
    	<?php 
			$term = wp_get_post_terms($post->ID, 'slider-cat', array("fields" => "all"));
			global $post;
			$args = array(
				'post_type' 		=> 'home-slide',
				'posts_per_page' 	=> 5,
				'orderby'			=> 'rand',
			);
			$slides = get_posts( $args );
			
		?>
    	<div class="gallery-head"><h2>Featured</h2></div>
    	<div class="carousel slide" data-ride="carousel" id="carousel-example-generic">
           <div class="carousel-inner" role="listbox">
        	<?php
				$i = 0;
				foreach( $slides as $slide ) {
				
			?>
             
                <div class="item <?php echo ( $i == 0 ? 'active' : '' ); $i ++; ?>">
                	<?php echo get_the_post_thumbnail($slide->ID, 'full', array( 'class' => 'img-responsive' ) ); ?>
                </div>
             
        	<?php 
				}
				wp_reset_postdata();
			?>
             </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
    </div>
    <div id="home-top" class="container">
    	<div class="row">
        	<div class="col-md-17 inner-box">
            	<div class="match">
                    <?php 
						if( have_posts() ) : while( have_posts() ) : the_post();
					 		the_content(); 
						endwhile;
						endif;
						?>
                </div>
            </div>
        	<div class="col-md-7 inner-box home-contact">
            	<?php echo do_shortcode( '[contact-form-7 id="23068" title="Home Contact" html_class="form match"]' ); ?>
            </div>
        </div>
    </div>
    <div class="container padding">
    	<div class="row three-boxes">
        	<div class="col-md-8 box">
            	<div class="match testi-home">
                	<h3>Testimonials</h3>
                	<?php 
						global $post;
						$args = array(
							'post_type' 		=> 'testimonials',
							'posts_per_page' 	=> 1,
							'orderby'			=> 'rand',
						);
						$posts = get_posts( $args );
						foreach( $posts as $testi ) {
							$post = $testi;
							setup_postdata( $post );
					?>
                    <?php the_excerpt(); ?>
                    <strong><a href="/testimonials/"><?php the_title(); ?></a></strong>
                    <?php 
						}
						wp_reset_postdata();
					?>
                </div>
            </div>
            <div class="col-md-8 box">
            	<div class="match botlink">
                	<h3>Wedding Photography</h3>
                    <p><img src="http://www.lgfineartweddings.com/wp-content/themes/lgw_theme/img/logo.png" style="width: 120px; height: auto; float: right; padding-left: 10px; padding-right: 10px; ">Looking for some fabulous wedding photography, visit our sister site LG Fine Art Weddings</p>
                    
                    <a href="http://www.lgfineartweddings.com/" class="btn btn-default">Visit LG Fine Art Weddings</a>
                </div>
            </div>
            <div class="col-md-8 box">
            	<div class="match botlink">
                	<h3>Packages</h3>
                    <a href="/all-packages/" class="btn btn-default">Check Our Prices</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container padding">
    	<div class="row">
        		<?php 
					global $post;
					$args = array(
						'post_type' 		=> 'post',
						'posts_per_page' 	=> 1,
						'orderby'			=> 'date',
						'order'				=> 'desc'
					);
					$posts = get_posts( $args );
					foreach( $posts as $blog ) {
						$post = $blog;
						setup_postdata( $post );
						$thumb_id = get_post_thumbnail_id( $blog->ID ); 
						$image = wp_get_attachment_url( $thumb_id );
				?>
        	<div class="col-md-14">
            	<div class="match" style="background-image: url(<?php echo $image; ?>); background-size: cover;">
                </div>
            </div>
            <div class="col-md-10 home-blog match">
            	<time><?php the_date(); ?></time>
                <h3><?php the_title(); ?></h3>
                <div class="excerpt">
                	<?php the_excerpt(); ?>
                </div>					
                	<a href="<?php the_permalink(); ?>" class="btn btn-default">OPEN POST</a>
            </div>
            <?php 
				} 
				wp_reset_postdata();
			?>
        </div>
    </div>
    
    <div class="container padding">
   	  <?php
	  	$content = get_post_meta( $post->ID, 'home_bottom_text', true );
		echo wpautop( $content );
	  ?>
    </div>
<?php get_footer(); ?>   