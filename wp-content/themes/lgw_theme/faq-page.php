<?php
/*
Template Name: FAQ Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="row">
        	<div class="col-md-24 ">
            	<h1><?php the_title(); ?></h1>
            	<?php 
					$args = array(
						'post_type'        => 'faqs',
						'orderby'		   => 'menu_order',
						'posts_per_page'   => -1
					);
					$i = 1;
					$faqs_array = get_posts( $args );
					foreach( $faqs_array as $faq ) { 
						setup_postdata( $faq );
					?>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                  <?php echo get_the_title( $faq->ID ); ?>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php echo ( $i == 1 ? ' in ' : '' ); ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                              <div class="panel-body">
                                <?php the_content( ); ?>
                              </div>
                            </div>
                          </div>
                        </div>
					<?php
						$i ++;
                    }
				?>
            </div>
        	
        </div>
    </div>
<?php get_footer(); ?>   