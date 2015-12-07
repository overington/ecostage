<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer band" role="contentinfo">
  <div id="footer-var" class='band'>
    <div id="social-buttons">
      <a href="<?php echo esc_url('https://www.facebook.com/groups/417324151803310/', 'eco'); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/f_button.png" width="45px" height="45px" alt="facebook" /></a>
      <a href="<?php echo esc_url('https://twitter.com/ecostagepledge', 'eco' ); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/t_button.png" width="45px" height="45px" alt="twitter" /></a>
    </div>
    <div id="footer-text-right">
      <p>Join us in building a community of ecologically minded theatre makers</p>
    </div>
  </div>
<?php is_front_page() ? get_sidebar('footer'): '' ; ?>
		<div class="site-info">
			Site: <a href="<?php echo esc_url( __( 'http://madeso.uk/r/eco/', 'eco' ) ); ?>">made<strong>so</strong></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
