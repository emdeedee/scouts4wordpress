<div id="sidebar">
<div id="tools">
<h3>Share this page</h3>
<a href="#" onclick="window.print();return false;"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/print_icon.jpg"> Print this page</a><br />
<a href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>: <?php the_permalink(); ?>" target="_blank"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/email_16.png">  Email a friend</a><br />
<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/facebook_16.png"> Share on Facebook</a><br />
<a href="http://twitter.com/home?status=<?php the_title(); ?>: <?php the_permalink(); ?>" target=_blank><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/twitter_16.png"> Share on Twitter</a>
</div> 

<div id="sidebar-top"> 
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(11) ) : ?>

<?php endif; ?>
</div>

<div id="sidebar-bottom"> 
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(12) ) : ?> 		
<?php endif; ?> </div>   

</div>