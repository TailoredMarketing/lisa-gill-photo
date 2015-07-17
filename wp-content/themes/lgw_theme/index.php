<?php get_header(); ?>
	<div id="content" class="container">
    	<?php 
			$i=0;
			while( have_posts() ) : 
				global $wp_query;
				the_post();
		?>
            <?php if( $i == 0 || $i == 2 || $i == 6 ) { ?>
            	<div class="row">
            <?php } ?>
            <?php if( $i<2 ) { ?>
                <div class="col-md-12 blog-feat">
                	<?php if ( get_the_post_thumbnail() != '' ) { ?>
                    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-home-lg', array( 'class' => 'img-responsive' ) );  ?></a>
                    <?php } else { ?>
                    	<img src="http://placehold.it/455x228?text=No+Featured+Image" class="img-responsive" alt="...">
                    <?php } ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
                </div>
            <?php } else {?>
            	<div class="col-md-6 blog-small">
                	<?php if ( get_the_post_thumbnail() != '' ) { ?><strong></strong>
                		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-home', array( 'class' => 'img-responsive' ) );  ?></a>
                    <?php } else { ?>
                    	<img src="http://placehold.it/300x200?text=No+Featured+Image" class="img-responsive" alt="...">
                    <?php } ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            <?php } ?>
            <?php if( $i == 1 || $i == 5 || $i == 9 || $i == $wp_query->post_count-1 ) { ?>
            	</div>
                <hr>
            <?php } ?>
        <?php  	
			$i++;
			endwhile;
		?>
         <?php wp_pagenavi(); ?>
    </div>
<?php get_footer(); ?>   