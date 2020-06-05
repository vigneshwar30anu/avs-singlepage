<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(  ); ?> >

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<meta name="author" content="avstechs" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php wp_title(); ?></title>
	<?php 
	wp_head( ); 
	global $avs;
	?>
</head>

<body class="stretched side-push-panel">

	<div class="body-overlay"></div>

	<div id="side-panel" class="dark">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget widget_links clearfix">

				<h4>About Canvas</h4>

				<div style="font-size: 14px; line-height: 1.7;">
					<address style="line-height: 1.7;">
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
					</address>

					<div class="clear topmargin-sm"></div>

					<abbr title="Phone Number">Phone:</abbr> (91) 8547 632521<br>
					<abbr title="Fax">Fax:</abbr> (91) 11 4752 1433<br>
					<abbr title="Email Address">Email:</abbr> info@canvas.com
				</div>

			</div>

			<div class="widget clearfix">

				<h4>Connect Socially</h4>

				<a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
					<i class="icon-facebook"></i>
					<i class="icon-facebook"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
					<i class="icon-twitter"></i>
					<i class="icon-twitter"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-github" title="Github">
					<i class="icon-github"></i>
					<i class="icon-github"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-pinterest" title="Pinterest">
					<i class="icon-pinterest"></i>
					<i class="icon-pinterest"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-forrst" title="Forrst">
					<i class="icon-forrst"></i>
					<i class="icon-forrst"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-linkedin" title="LinkedIn">
					<i class="icon-linkedin"></i>
					<i class="icon-linkedin"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-gplus" title="Google Plus">
					<i class="icon-gplus"></i>
					<i class="icon-gplus"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-instagram" title="Instagram">
					<i class="icon-instagram"></i>
					<i class="icon-instagram"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-flickr" title="Flickr">
					<i class="icon-flickr"></i>
					<i class="icon-flickr"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-skype" title="Skype">
					<i class="icon-skype"></i>
					<i class="icon-skype"></i>
				</a>

			</div>

			

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header dark static-sticky" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
					
						<a href="<?php echo esc_url(home_url( '/' )); ?>" class="standard-logo" data-dark-logo="<?php if($avs['logo']['url'] == ''){ echo get_template_directory_uri().'/dist/asset/images/canvasone.png ';} else {echo $avs['logo']['url'];} ?>"><img src="<?php if($avs['logo']['url'] == ''){ echo get_template_directory_uri().'/dist/asset/images/canvasone.png ';} else {echo $avs['logo']['url'];} ?>" alt="Canvas Logo"></a>
						<a href="<?php echo esc_url(home_url( '/' )); ?>" class="retina-logo" data-dark-logo="<?php echo get_template_directory_uri().'/dist/asset/images/canvasone-dark@2x.png' ?>"><img src="<?php echo get_template_directory_uri().'/dist/asset/images/canvasone@2x.png' ?>" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
				<!--	<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-works"><div>Works</div></a></li>
							<li><a href="#" data-href="#section-services"><div>Services</div></a></li>
							<li><a href="#" data-href="#section-blog"><div>Blog</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
						</ul>

						<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-reorder"></i></a></div>

					</nav> --><!-- #primary-menu end -->
					<nav id="primary-menu" class="header-nav" role="navigation" aria-label="<?php esc_html_e( 'Main Navigation', '_themename' ) ?>">
                    <?php wp_nav_menu( array('theme_location' => 'main-menu') ) ?>
                </nav>
				</div>

			</div>

        </header>
        