<?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
    <div id="sidebar" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'main_sidebar' ); ?>
    </div><!-- .widget-area -->
<?php endif; ?>