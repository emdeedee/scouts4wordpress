<?php get_header(); ?>

<h2 class="title">Search Results</h2>

<?php include(TEMPLATEPATH . '/sidebarleft.php'); ?>

	<div id="content">

	<?php if (have_posts()) : ?>
	
	<span class="breadcrumbs"><a href="<?php echo get_option('home'); ?>/">Home</a> > <a href="<?php $permalink = get_permalink( $id ); ?>">Search</a></span><p></p>	

	<div id="archive">

	<?php while (have_posts()) : the_post(); ?>

	<div class="clearfloat">
	<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><font color="#4D2177"><?php the_title(); ?></font></a></h3>
	<div class="meta"><a href="<?php $permalink = get_permalink( $id ); ?>"><?php the_category(', ') ?></a></div>	
	
	<div class="spoiler">
	
	<?php the_excerpt(); ?>
	</div>

	</div>

		
<?php endwhile; ?>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
			else { ?>

			<div class="right"><?php next_posts_link('Next Page &raquo;') ?></div>
			<div class="left"><?php previous_posts_link('&laquo; Previous Page') ?></div>
			<?php } ?>

		</div>

	</div>

	<?php else : ?>
	

	<span class="breadcrumbs"><a href="<?php echo get_option('home'); ?>/">Home</a> > <a href="<?php $permalink = get_permalink( $id ); ?>">Search</a></span><p></p>	
	<h3 class="title">No posts found. Try a different search?</h3>
	

	<?php endif; ?>

</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
