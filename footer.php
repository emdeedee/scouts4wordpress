</div>

<div id="footer">

<div id="footerall">
<div id="ceop">
<a href="http://www.ceop.gov.uk/"><img src="<?php bloginfo('template_directory'); ?>/images/CEOPReportBtn.gif"></a>
</div>

<div id="footer2">
<a href="<?php echo get_option('home'); ?>/about">About us</a><br />
<a href="<?php echo get_option('home'); ?>/mission-statement">Mission statement</a><br />
<a href="<?php bloginfo('rss2_url'); ?>">News (RSS)</a><br />
<?php if ( is_user_logged_in() ) { ?> <?php wp_register('', ''); ?><br />
<?php } ?> <?php wp_loginout(); ?>
</div>

<div id="footer1">
<a href="<?php echo get_option('home'); ?>/">Home</a><br />
<a href="<?php echo get_option('home'); ?>/contact-us">Contact us</a><br />
<a href="<?php echo get_option('home'); ?>/accessibility">Accessibility</a><br />
<a href="<?php echo get_option('home'); ?>/sitemap">Site Map</a><br />
<a href="<?php echo get_option('home'); ?>/privacy">Privacy</a>
</div>
</div>

<div id="copyright"><p>© <?php bloginfo('name'); ?>, all rights reserved | Charity number: XXXXXX<br />
Powered by <a href="http://wordpress.org/">WordPress</a> | <a href="http://www.iscout4wordpress.org.uk">Scouts 4 WordPress</a> theme by <a href="http://www.iscout4wordpress.org.uk">Scouting Themes 4 WordPress</a></p></div>

</div>
</div>

</body>
</html>