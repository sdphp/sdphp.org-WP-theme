<header class="banner container" role="banner">
	<div class="top">
		<a class="navbar-brand" href="<?php echo home_url(); ?>/"><h1><?php bloginfo( 'name' ); ?></h1></a>
		<p class="description"><?php bloginfo( 'description' ); ?></p>
		<div class="visible-lg">
			<?php the_widget( 'WP_Widget_Search' ); ?>
		</div>
	</div>
  <div class="navbar navbar-default navbar-static-top">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

    <nav class="collapse navbar-collapse" role="navigation">
		<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
			endif;
		?>
    </nav>
  </div>
</header>
