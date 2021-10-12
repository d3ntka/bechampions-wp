			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->



					</div><!-- /.row -->
				</div><!-- /.container -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row justify-content-around align-items-center footer__text">
					<div class="col-md-6 center-text footer__text--a">
						Valorant to <span class="secondary">my</span>
					</div>
					<div class="col-md-6 center-text footer__text--b">
						<div>
							Stań się częścią projektu już dziś.
						</div>
						<div class="secondary">
							Oglądaj. Graj. Czuj. BeChampions
						</div>
					</div>
				</div>
				<div class="row justify-content-center">

					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'col-md-6 footer__menu',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav justify-content-around">%3$s</ul>',
									//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;

						if ( is_active_sidebar( 'third_widget_area' ) ) :
					?>
						<div class="col-md-12">
							<?php
								dynamic_sidebar( 'third_widget_area' );

								if ( current_user_can( 'manage_options' ) ) :
							?>
								<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge badge-secondary"><?php esc_html_e( 'Edit', 'bechampions' ); ?></a></span><!-- Show Edit Widget link -->
							<?php
								endif;
							?>
						</div>
					<?php
						endif;
					?>
				</div><!-- /.row -->
				<div class="row justify-content-center">
					<div class="col-auto footer__logo">

						<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php
								$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

								if ( ! empty( $header_logo ) ) :
							?>
								<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							<?php
								else :
									echo esc_attr( get_bloginfo( 'name', 'display' ) );
								endif;
							?>
						</a>
					</div>

				</div>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
