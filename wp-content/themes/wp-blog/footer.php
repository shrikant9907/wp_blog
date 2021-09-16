		<footer class="site-footer footer_style1 bg-dark f14 text-center">
			<div class="footer_top pt_60 pb_20">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-4 pl_60">
						<?php 
							if ( is_active_sidebar( 'footer-col1' ) ) : 
								dynamic_sidebar( 'footer-col1' );	
							else:
								if (is_user_logged_in()) {
									echo '<a class="tdn text-white" target="_blank" href="'.admin_url('/widgets.php').'">Add Widget</a>';
								}
							endif;
						?>
						</div>
						<div class="col-12 col-sm-6 col-md-4">
							<?php 
								if ( is_active_sidebar( 'footer-col2' ) ) : 
									dynamic_sidebar( 'footer-col2' );	
								else:
									if (is_user_logged_in()) {
										echo '<a class="tdn text-white" target="_blank" href="'.admin_url('/widgets.php').'">Add Widget</a>';
									}
								endif;
							?>
						</div>
						<div class="col-12 col-sm-6 col-md-4 pl_50">
							<?php 
								if ( is_active_sidebar( 'footer-col3' ) ) : 
									dynamic_sidebar( 'footer-col3' );	
								else:
									if (is_user_logged_in()) {
										echo '<a class="tdn text-white" target="_blank" href="'.admin_url('/widgets.php').'">Add Widget</a>';
									}
								endif; 
							?>
						</div>
					</div>
				</div>
			</div>

			<div class="footer_bottom border-top pt_10 pb_0 f12 text-center">
				<div class="container">
					<div class="row">
						<div class="col">
							<p class="f12 lh18 mb_10">&copy; <?php echo date('Y'); ?> WP-Blog. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>	
		</footer>

		<a href="#" class="gotoparrow"><i class="fas fa-arrow-up"></i></a>
		<?php wp_footer(); ?>
  </body>
</html>