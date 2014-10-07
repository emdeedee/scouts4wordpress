<?php get_header(); ?>

<h2 class="title"><?php the_title(); ?></h2>

<?php include(TEMPLATEPATH . '/sidebarleft.php'); ?>

<div id="content">

<span class="breadcrumbs"><a href="<?php echo get_option('home'); ?>/">Home</a> > <a href="<?php $permalink = get_permalink( $id ); ?>"><?php the_title(); ?></a></span><p></p>


<h3 class="title" class="print"><?php the_title(); ?></h3>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div class="post" id="post_<?php the_ID(); ?>">
			
		<div class="entry clearfloat">
		<div style="float:center"><img src="<?php $values = get_post_custom_values("pageimage"); echo $values[0]?>" width="540px" height="200px"; /></div>
		<p></p>
		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>
		
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</div>
		
	<?php endwhile; endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
