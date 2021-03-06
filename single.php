<?php get_header(); ?>

<h2 class="title"><?php the_title(); ?></h2>

<?php include(TEMPLATEPATH . '/sidebarleft.php'); ?>

<div id="content">	

<span class="breadcrumbs"><a href="<?php echo get_option('home'); ?>/">Home</a> > <a href="<?php $permalink = get_permalink( $id ); ?>"><?php the_category(', ') ?></a> > <a href="<?php $permalink = get_permalink( $id ); ?>"><?php the_title(); ?></a></span><p></p>


<h3 class="title"><?php the_title(); ?></h3>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="stats">
<span><?php the_time('j F Y') ?></span>
</div>
			
		<div class="entry clearfloat">
		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>
		
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</div>
		
	<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
