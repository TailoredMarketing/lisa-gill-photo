<div class="container padding" id="footer">
    	<div class="row">
        	<div class="col-md-6 col-sm-12">
            	<h3>Partners</h3>
                    <p><a href="http://www.thebabyscanstudio.co.uk/" target="_blank">Baby Scan Studio</a></p>
                    <p><a href="http://www.pinksflorist.co.uk" target="_blank">Pinks Florist</a></p>
                    <p><a href="http://www.sanctumbeaconsfield.co.uk" target="_blank">Sanctum Beaconsfield</a></p>
                <h3>Likes</h3>
                    <p><a href="http://www.thisismyfilm.com/wedding/index.htm" target="_blank">This Is My Wedding Film</a></p>
                    <p><a href="http://www.emmamilbourn.co.uk" target="_blank">Hair by Emma Milbourn</a></p>
                    <p>Make Up by Pippa Dadd</p>
                    <p><a href="http://www.rupertwardlewis.com" target="_blank">Rupert Ward - Lewis Films</a></p>
            </div>
            <div class="col-md-6 col-sm-12">
            	<h3>Archives</h3>
                	<ul class="list-unstyled">
                    	<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 8 ) ); ?>
                        <li><a href="/blog/">All Blogs</a></li>
                    </ul>
            </div>
            <div class="col-md-6 col-sm-12">
            	<h3>Categories</h3>
                <ul class="list-unstyled">
                    <?php wp_list_categories( array( 'number' => 9, 'title_li' => __( '' ), 'show_option_all'    => 'All Categories', )  ); ?>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
				<h3>CONTACT</h3>
                    <div id="hcard-Lisa-Gill-Photography">
                    <div itemscope="" itemtype="http://data-vocabulary.org/Organization"> 
                        <span itemprop="name">Lisa Gill Photography</span><br>
                        Located at 
                        <span itemprop="address" itemscope="" itemtype="http://data-vocabulary.org/Address">
                        <span itemprop="street-address">15, Knottocks Drive</span>,<br> 
                        <span itemprop="locality">Beaconsfield, Buckinghamshire</span>, <br>
                        <span itemprop="region">HP9 2AH</span>.<br>
                        </span>
                        Tel: <span itemprop="tel" class="callTrack_Replace">01494 680811</span>.<br>
                    Mobile: 07894 947724<br>
                        <a href="http://www.lisagillphotography.com" itemprop="url">http://www.lisagillphotography.com</a>.
                    <br>
                    <a href="https://plus.google.com/103294202036713409023" rel="publisher">Google+</a>  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<p class="text-center"><strong>&copy; Lisa Gill Fine Art Wedding Photography <?php echo date("Y"); ?></strong></p>
</div>
<?php wp_footer(); ?>
</body>
</html>