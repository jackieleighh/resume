				<section id="contact">
					<div class="col-sm-12 section footer full left">
						<div class="row inner">
							<div class="inner-table">
							<h2>keep in touch!</h2>
							<?php 
			                $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
			                $menuID = $menuLocations['footer_menu']; // Get the *primary* menu ID
			                $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.

			                foreach ( $primaryNav as $navItem ) {

			                    echo '<div class="contact-link"><a href="'.$navItem->url.'" title="'.$navItem->title.'"><i class="'.$navItem->title.'"></i></a></div>';

			                } ?>
			                </div>
						</div>
					</div>
				</section>
			</div>
	    </div>
	</div>

    <?php wp_footer(); ?>
    
	</body>
</html>