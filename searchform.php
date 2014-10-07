<form method="get" id="searchform" class="left" action="<?php bloginfo('url'); ?>/">
<div id="searchentry">
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" onfocus="this.value=''" title="Enter the terms you wish to search for." /><input type="image" src="<?php echo bloginfo('stylesheet_directory'); ?>/images/searchbutton.png" id="searchsubmit" />

</div>
</form>