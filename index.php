
	  <?php get_header(); ?>


	  <?php
		$custom_logo_id = get_theme_mod('customlogo');
		$logo = wp_get_attachment_image_src($custom_logo_id , 'full');
		if(has_custom_logo())
		{
			$img = esc_url($logo[0]);
		}
	  ?>


	  <!-- post type area-->

<?php
	$wpb_all_query = new WP_Query(array('post_type' => 'post' , 'post_status' => 'publish'));
?>
<?php if($wpb_all_query->have_posts()): ?>
<ul>
	<?php  while($wpb_all_query->have_posts()):
		$wpb_all_query->the_post();
	?>
	<li><a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a>
	<p><?php the_content(); ?></p>
</li>
<?php endwhile; ?>
</ul>
<?php else: ?>
<p><?php _e('sorry, no posts match your criteria'); ?></p>
<?php endif; ?>

<!-- for custom post type -->

<?php
	$wpb_all_query = new WP_Query(array('post_type' => 'custom_projects' , 'post_status' => 'publish'));
?>
<?php if($wpb_all_query->have_posts()): ?>
<ul>
	<?php  while($wpb_all_query->have_posts()):
		$wpb_all_query->the_post();
	?>
	<li><a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
		<?php  the_time('F j, Y g:i a'); ?>
	</a>
	<?php the_author(); ?>
	<p><?php the_content(); ?></p>
</li>
<?php endwhile; ?>
</ul>
<?php else: ?>
<p><?php _e('sorry, no posts match your criteria'); ?></p>
<?php endif; ?>


	  <!-- post area end -->



	  <!-- sidebar code -->
		<?php if(is_active_sidebar('sidebar-1')): ?>
			<div id="secondary" class="sidebar-container" role="complementary">
				<div class="widget-area">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if(is_active_sidebar('sidebar-2')): ?>
			<div id="secondary" class="sidebar-container" role="complementary">
				<div class="widget-area">
					<?php dynamic_sidebar('sidebar-2'); ?>
				</div>
			</div>
		<?php endif; ?>

		<?php get_search_form(); 
		 //should be used with sidebar code?>
		


	  <!-- sidebar code ends-->
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Kusina</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
			<?php 
			wp_nav_menu(array('menu' => 'primary-menu' ,
			'container' => '' ,
			 'items-wrap' => '<ul class = "nav navbar-nav navbar-right Header">%3$s</ul>',
			 )); ?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider js-fullheight owl-carousel bg-white">
      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(<?php echo get_bloginfo('template_url');?>/images/bg_3.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">Eat Healthy <br> and Natural Foods</h1>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/menu-1.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/menu-2.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/menu-3.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            </div>
		            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(<?php echo get_bloginfo('template_url');?>/images/bg_2.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">We Love <br> Delicious Foods</h1>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/menu-1.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/menu-2.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/menu-3.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            </div>
		            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>
    </section>
	

		<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(<?php echo get_bloginfo('template_url');?>/	images/about.jpg); position: relative">
						<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
  						<span class="ion-ios-play"></span>
  					</a>
					</div>
					<div class="col-sm-7 wrap-about py-5 ftco-animate">
	          <div class="heading-section mt-5 mb-4">
	          	<div class="pl-lg-5 ml-md-5">
		          	<span class="subheading">About</span>
		            <h2 class="mb-4">Welcome to Kusina Restaurant</h2>
	            </div>
	          </div>
	          <div class="pl-lg-5 ml-md-5">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<h3 class="mt-5">Special Recipe</h3>
							<div class="thumb my-4 d-flex">
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/lunch-4.jpg);"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/lunch-7.jpg);"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/lunch-6.jpg);"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="20000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Finished Projects</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Working Days</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Breakfast</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/breakfast-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/breakfast-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/breakfast-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Lunch</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/lunch-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/lunch-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/lunch-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Dinner</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/dinner-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/dinner-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/dinner-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<!--  -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Desserts</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/dessert-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/dessert-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/dessert-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>
        	
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Wine Card</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/wine-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/wine-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/wine-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Drinks</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/drink-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/drink-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/drink-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12 text-center ftco-animate">
        		<p><a href="#" class="btn btn-black py-3 px-5">View All Menu</a></p>
        	</div>
        </div>
    	</div>

    </section>

    <section class="ftco-section testimony-section" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
			
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Chef</span>
            <h2 class="mb-4">Our Mater Chef</h2>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/chef-4.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">CEO, Co Founder</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/chef-2.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/chef-3.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/chef-1.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-5 ftco-animate img img-2" style="background-image: url(<?php echo get_bloginfo('template_url');?>/images/bg_6.jpg);"></div>
          <div class="col-md-7 ftco-animate makereservation p-4 p-md-5">
          	<div class="heading-section ftco-animate mb-5">
	          	<span class="subheading">Book a Table</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Person</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
		

        <?php get_footer(); ?>