<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<p class="disclaimer">
                    Disclaimer: All material in this publication is provided for information only and may not be construed as medical advice or instruction. No action or inaction should be taken based solely on the contents of this publication; instead, readers should consult appropriate health professionals on any matter relating to their health and well-being. The information and opinions provided in this publication are believed to be accurate and sound, based on the best judgment available to the authors, but readers who fail to consult with appropriate health authorities assume the risk of any injuries. The publisher is not responsible for errors or omissions. The material in this publication has not been approved by the Food & Drug Administration. This content may not be republished for commercial or non-commercial purposes without written permission.
                    </p>
                    <p class="copyright">
                        &copy; <script>document.write(new Date().getFullYear());</script> The Institute for Natural Healing, All Right Reserved
                    <br>
                    <span class="terms">
                        <a href="http://www.institutefornaturalhealing.com/terms-and-conditions/" target="_blank">Terms & Conditions</a>
                    </span>
                    </p>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
