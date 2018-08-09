		<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

			<div id="inner-footer" class="wrap cf">

				<nav role="navigation">
					<?php wp_nav_menu(array(
						'container' => false,
						'container_class' => 'menu cf',
						'menu' => __( 'Footer Nav', 'bonestheme' ),
						'menu_class' => 'nav footer-nav cf',
						'theme_location' => 'footer-nav',
					)); ?>
				</nav>

				<div class="copyright">
					&copy; Copyright <?php echo date('Y'); ?>, <?php bloginfo( 'name' ); ?>
					<?php if(is_front_page()){ echo '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.websitedesign.co.uk">Website By WDL</a>'; } ?>
				</div>

			</div>

		</footer>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
