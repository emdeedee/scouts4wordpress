<?php get_header(); ?>

<div id="featured"> 

<?php query_posts('showposts=1&category_id=1'); $i = 1; ?>
		<?php while (have_posts()) : the_post(); ?>	
	<?php $values = get_post_custom_values("Headline");?>
 
<div class="featuredimage"><?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?></div>
	
<div id="featuredtabactive">
<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
</div>
<?php endwhile; ?>
<div id="featuredtabinactive">
<a href="<?php echo bloginfo('home'); ?>/who-we-are/sections/">Sections</a>
</div>

<div id="featuredtabinactive">
<a href="<?php echo bloginfo('home'); ?>/get-involved/fundraising-activities/">Fundraising</a>
</div>

<div id="featuredtabinactive">
<a href="<?php echo bloginfo('home'); ?>/contact-us/join/">Join the adventure!</a>
</div>

</div>

<div id="follow">
<h3>Follow us</h3>

<div id="follow1" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?> 
<?php endif; ?>
<a href="http://twitter.com/ukscouting"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/facebook_16.png"> Become a fan of Scouting on Facebook</a>
</div>

<div id="follow2" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?> 
<?php endif; ?>
<a href="http://twitter.com/ukscouting"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/twitter_16.png"> Follow Scouting on Twitter</a>
</div>

<div id="follow3" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?> 
<?php endif; ?>
<a href="http://twitter.com/ukscouting"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/youtube_16.png"> Subscribe to Scouting on YouTube</a>
</div>

</div>

<div id="top">

<div id="top1" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?> 
<h3>News</h3>
<?php endif; ?>
<h4>UK Scouting News</h4>
<div id="newsrss"><?php include_once(ABSPATH . WPINC . '/rss.php');
wp_rss('http://www.scouts.org.uk/news/rss', 2); ?></div>
</div>

<div id="top2" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : ?>
<h3>Calendar</h3>
<?php endif; ?>
</div>

<div id="top3" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : ?>
<h3>Member Resources</h3>
<?php endif; ?>
<div id="morelogin">
<?php wp_loginout(); ?>   <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/arrow_purple.jpg">
</div>
</div>

</div>	

<div id="bottom">

<div id="bottom1" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(7) ) : ?>
<h3>Gallery</h3>

</div>
<?php endif; ?>
</div>

<div id="bottom2" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(8) ) : ?> 
<h3>Newsletter</h3>
<?php endif; ?>
</div>

<div id="bottom3" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(9) ) : ?>
<h3>Join the adventure</h3>
<div style="float:centre"><a href="http://www.scouts.org.uk/join/"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/ivolunteer.png"></a></div>
<?php endif; ?>
</div>

</div>	
</ br>
<?php get_footer(); ?>
