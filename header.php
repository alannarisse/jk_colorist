<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Colorist
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="canonical" href="http://jolenekelleylmt.com/"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Jolene Kelley"/>
<meta property="og:description" content="Jolene Kelley LMT - Licensed Massage Therapist in Portland, Oregon, specializing in Craniosacral Therapy, Shiatsu Massage, Energy Healing, my goal is to offer affordable healing and bodywork to the Portland community." />
<meta name="description" content="Jolene Kelley LMT - Licensed Massage Therapist in Portland, Oregon, specializing in Craniosacral Therapy, Shiatsu Massage, Energy Healing, my goal is to offer affordable healing and bodywork to the Portland community." />
<meta name="keywords" content="Craniosacral Therapy Portland,Cranio Sacral Portland,Cranial Sacral Portland,Shiatsu Massage Portland,Energy Work Portland,Reiki Portland,Licensed Massage Therapist Portland,Northeast Portland,Southeast Portland,NE Portland,SE Portland" />
<meta property="og:url" content="http://jolenekelleylmt.com/"/>
<meta property="og:site_name" content="Jolene Kelley"/>
<meta name="msvalidate.01" content="4FA8B23E4EFAF039292C0E996A3AEFE1" />
<?php if( get_theme_mod('apple_touch') ) : ?>
	<!-- For first- and second-generation iPad: -->
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_theme_mod( 'apple_touch' ) ); ?>">
<?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" itemscope itemtype="http://schema.org/LocalBusiness" class="hfeed site <?php echo colorist_site_style_class(); ?>">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'colorist' ); ?></a>
	<?php do_action('colorist_before_header'); ?>
	    <header id="masthead" class="site-header <?php echo colorist_site_style_header_class(); ?>" role="banner">
	        <?php do_action('colorist_before_branding'); ?>

		    <div id="nav-wrap" class="branding header-image">

		       <?php if ( get_theme_mod ('header_overlay',false ) ) {
				   echo '<div class="overlay overlay-header"></div>';
				} ?>
			    <div class="container">
				    <div class="site-branding six columns"><?php
						   // $header_text = get_theme_mod( 'header_text' );
							$logo_title = get_theme_mod( 'logo_title' );
							$logo = get_theme_mod( 'logo', '' );
							$tagline = get_theme_mod( 'tagline',true);
							if( $logo_title && function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
					        }elseif( $logo != '' && $logo_title ) { ?>
							   <h1 class="site-title img-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url($logo) ?>"></a></h1>
						<?php	}else { ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span itemprop="name"><?php bloginfo( 'name' ); ?></span></a></h1>
							    <?php } ?>
							<?php if( $tagline ) : ?>
									<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
							<?php endif;
						?>

					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation ten columns" role="navigation" aria-label="<?php _e( 'Top Menu', 'jk_colorist' ); ?>">
						<!-- <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"> -->
						<?php // _e( '', 'jk_colorist' ); ?>
						<!-- </button> -->
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
					<?php do_action('colorist_after_primary_nav'); ?>
				</div>
			</div>
	    </header><!-- #masthead -->
	<?php do_action('colorist_after_header'); ?>


	<?php if ( function_exists( 'is_woocommerce' ) ||  function_exists( 'is_cart' ) ||  function_exists( 'is_checkout' ) ) :
	 if ( is_woocommerce() || is_cart() || is_checkout() ) { ?>
		<div class="breadcrumb-wrap">
			<div class="container">
				<div class="six columns">
					<?php $breadcrumb = get_theme_mod( 'breadcrumb',true );
					if( $breadcrumb ) : ?>
						<div id="breadcrumb" role="navigation">
							<?php woocommerce_breadcrumb(); ?>
						</div>
					<?php else:  ?>
						&nbsp;
					<?php endif; ?>
				</div>
				<div class="ten columns">
					<header class="entry-header">
						<h1 class="entry-title"><?php woocommerce_page_title(); ?></h1>
					</header><!-- .entry-header -->
				</div>
			</div>
		</div>
	<?php }
	endif; ?>
