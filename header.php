<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />

<link rel="stylesheet" href="print.css" type="text/css" media="print" />

<?php wp_head(); ?>

</head>
<body>

<div id="head" class="clearfloat">

<div class="clearfloat">

	<div id="logo" class="left">
<a href="<?php echo get_option('home'); ?>/"><h1 class="name"><?php bloginfo('name'); ?></h1><h1 class="desc">
<?php
$desc = get_bloginfo('description');
if ($desc=="Just another WordPress site")
echo "We provide fun, challenge and adventure to over 400,000 girls and boys across the UK";
else
echo get_bloginfo('description');
?>
</h1></a>
</div>
	<div id="headerright">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(13) ) : ?> 
<?php endif; ?>
<br />
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>

</div>

<div id="navbar" class="clearfloat" z-index:1;>

<ul id="page-bar" class="left clearfloat">

<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
<?php
$clean_page_list = wp_list_pages('echo=0&sort_column=menu_order&title_li&exclude=');
$clean_page_list = preg_replace('/title=\"(.*?)\"/','',$clean_page_list);
echo $clean_page_list;
?>
<li><a href="http://www.scoutshops.com/">Shop</a></li>
<div id="login"><div style="float:right"><li><?php if ( is_user_logged_in() ) { ?> <?php wp_register('', ''); ?></li>
<li><?php } ?> <?php wp_loginout(); ?></li></div></div>
</ul>

</div>


</div>

<div id="page" class="clearfloat">