<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dirt Bike Adventures
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@300;400&display=swap" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="/js/jquery.min.js "></script>
	<script src="/js/functions.js "></script>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

	<script>
		$(document).ready(function(){
			$('#icon').click(function(){
				$('ul').toggleClass('show');
			});
		});



		$window = $(window);
			$window.scroll(function() {
			$scroll_position = $window.scrollTop();
				if ($scroll_position > 50) { // if body is scrolled down by 300 pixels
					$('.site-header').addClass('sticky');

					// to get rid of jerk
					header_height = $('.site-header').innerHeight();
					$('body').css('padding-top' , '0');
				} else {
					$('body').css('padding-top' , '0');
					$('.site-header').removeClass('sticky');
				}
			});

			$(document).ready(function() {
				$("nav [href]").each(function() {
					if (this.href == window.location.href) {
						$(this).addClass("active");
					}
				});
			});

	</script>

	
	<?php wp_head(); ?>
	
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dirtbikeadventures' ); ?></a>

	<header id="myHeader" class="site-header">
		<div class="wrapper">
			<nav>
				<label class="logo"><a href="/"><img src="/wp-content/uploads/2022/08/UP-Dirt-Bike-Adventures_Horizontal_Logo_White_FINAL-1.png" alt=""></a></label>
					<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				<button class="res-cta">
					<a href="#"><img src="/wp-content/uploads/2022/08/UP-Dirt-Bike-Adventures_UP_Logo_White_FINAL-1.png" alt="">Book Now</a>
		    	</button>

				<label id="icon">
					<i class="fa-solid fa-bars"></i>
				</label>
			</nav>
	    </div>	
	</header><!-- #masthead -->
