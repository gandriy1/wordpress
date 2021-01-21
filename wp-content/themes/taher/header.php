<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package taher
 */

$page_title = $wp_query->post ? $wp_query->post->post_title : 'Page Not Found';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?> - Taher Landscaping</title>
	<?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5SFDWV5J3S"></script>
    <?php echo sh_var('sh_google_analytics'); ?>
</head>


<body class="<?php echo isset($args['body_classes_override']) ? $args['body_classes_override'] : 'page no-sidebar header-style-1 site-layout-full-width'; ?>">

<div id="top"></div>

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">

<div id="site-header-wrap">
    <!-- Top Bar -->
    <div id="top-bar">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">
                <div class="top-bar-content">
                    <span id="top-bar-text">
                        <i class="fa fa-phone"></i><?php echo sh_var('sh_business_phone'); ?>
                        <i class="fa fa-at"></i><?php echo sh_var('sh_business_email'); ?>
                    </span><!-- /#top-bar-text -->
                </div><!-- /.top-bar-content -->

                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">
                            <a href="<?php echo sh_var('sh_instagram_link'); ?>" title="Instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                            <a href="<?php echo sh_var('sh_twitter_link'); ?>" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->
            </div>
        </div>
    </div><!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header" class="header-front-page style-1">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner">          
                <div id="site-logo" class="clearfix">
                    <div id="site-logo-inner">
                        <a href="<?php echo esc_url( site_url( '/' )); ?>" title="Construction" rel="home" class="main-logo">
                            <img src="<?php echo sh_get_image_url('logo.png')?>" alt="Taher Landscaping" data-retina="<?php echo sh_get_image_url('logo.png')?>" 
							data-width="204" data-height="30" style="height: 50px;width: 150px;">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

				<?php echo sh_main_menu($page_title); ?>
            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->

<?php
if ( !is_front_page() && !is_home() ) : 
?>
	<!-- Featured Title -->
	<div id="featured-title" class="clearfix featured-title-left">
		<div id="featured-title-inner" class="container clearfix">
			<div class="featured-title-inner-wrap">
				<div class="featured-title-heading-wrap">
					<h1 class="featured-title-heading"><?php echo $page_title; ?></h1>
				</div>
			</div>
		</div>
	</div>
<?php
endif;
?>

