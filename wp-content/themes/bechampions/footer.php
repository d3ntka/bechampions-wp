			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->



					</div><!-- /.row -->
				</div><!-- /.container -->
			<?php
				endif;
				if ( is_front_page() && is_home() ) {
					// Default homepage
					
					} elseif ( is_front_page()){
					// Static homepage
					
					} elseif ( is_home()){
					
					// Blog page
					
					} else {
					// Everything else
					?>
						<?php if ( have_rows( 'options_sponsors', 'options' ) ) : ?>
					<div class="sponsors sponsors__fixed container-fluid">
					<div class="row sponsors__logos align-items-center">
						<div class="col-3 col-lg-2 sponsors__title grey">Sponsorują nas</div>
						<?php while ( have_rows( 'options_sponsors', 'options' ) ) :
						the_row(); ?>
							<?php
							$options_sponsor = get_sub_field( 'options_sponsor', 'options' );
							if ( $options_sponsor ) : ?>
								<div class="col-4 col-lg-2 sponsors__logo">
									<img src="<?php echo esc_url( $options_sponsor['url'] ); ?>" alt="<?php echo esc_attr( $options_sponsor['alt'] ); ?>" />
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
        			</div>

					</div>
    				<?php endif; ?>
					<?php 
					}
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

					?>
				</div><!-- /.row -->
				<div class="row">
					<div class="nav-socials">
						<?php if ( $options_fb = get_field( 'options_fb', 'options' ) ) : ?>
							<a target="_blank" href="<?php echo esc_url( $options_fb ); ?>">
								<span class="icon icon-sm">
									<svg xmlns="http://www.w3.org/2000/svg" width="11.41" height="21.941" viewBox="0 0 11.41 21.941">
										<g id="Group_231" data-name="Group 231" transform="translate(0)">
											<path id="Path_33" data-name="Path 33" d="M-897.309,56.535h-4.039c0-.058-.01-.117-.01-.175q0-4.834,0-9.668V46.52h-3.373V42.613h3.373v-.162c0-.942,0-1.885,0-2.827A6.064,6.064,0,0,1-901,37.539a4.221,4.221,0,0,1,2.153-2.42,5.16,5.16,0,0,1,2.285-.525c.853,0,1.705.041,2.558.072.229.008.457.042.683.063v3.514h-.161c-.623,0-1.245-.008-1.868,0a4.408,4.408,0,0,0-.8.079,1.28,1.28,0,0,0-1.082,1.084,4.121,4.121,0,0,0-.064.714c-.008.783,0,1.565,0,2.348v.151h3.855l-.506,3.906H-897.3V46.7q0,4.828,0,9.655C-897.3,56.418-897.305,56.477-897.309,56.535Z" transform="translate(904.731 -34.594)" fill="#fff"/>
										</g>
									</svg>
								</span>
							</a>
						<?php endif; ?>
						<?php if ( $options_twitter = get_field( 'options_twitter', 'options' ) ) : ?>
							<a target="_blank" href="<?php echo esc_url( $options_twitter ); ?>">
								<span class="icon icon-sm">
									<svg id="Group_230" data-name="Group 230" xmlns="http://www.w3.org/2000/svg" width="21.106" height="17.196" viewBox="0 0 21.106 17.196">
										<path id="Path_39" data-name="Path 39" d="M341.146,64.078h-.706a.894.894,0,0,0-.1-.014,11.427,11.427,0,0,1-1.3-.114,12.232,12.232,0,0,1-4.794-1.752c-.025-.015-.047-.034-.071-.052l.005-.019a8.732,8.732,0,0,0,3.345-.269,8.411,8.411,0,0,0,2.986-1.519,4.643,4.643,0,0,1-1.715-.419,4.439,4.439,0,0,1-1.418-1.06,3.757,3.757,0,0,1-.852-1.545,4.1,4.1,0,0,0,1.866-.077,4.532,4.532,0,0,1-1.769-.853,4.3,4.3,0,0,1-1.218-1.524,4.008,4.008,0,0,1-.409-1.91,5.677,5.677,0,0,0,.919.358,3.57,3.57,0,0,0,.977.143,4.351,4.351,0,0,1-1.769-2.629,4.3,4.3,0,0,1,.476-3.152,12.387,12.387,0,0,0,3.989,3.218,12.237,12.237,0,0,0,4.947,1.319c-.007-.052-.01-.085-.017-.118a4.2,4.2,0,0,1,.2-2.409,4.268,4.268,0,0,1,3.372-2.746c.13-.024.263-.036.395-.054h.594c.153.022.307.038.458.066a4.274,4.274,0,0,1,2.328,1.224.173.173,0,0,0,.188.057c.185-.05.374-.088.558-.139a8.606,8.606,0,0,0,1.957-.817c.032-.018.068-.032.1-.047l.017.022a4.424,4.424,0,0,1-1.831,2.327.2.2,0,0,0,.073,0,8.6,8.6,0,0,0,2.025-.527l.328-.129v.019c-.022.026-.046.05-.065.077a8.751,8.751,0,0,1-2,2.067.214.214,0,0,0-.1.2,12.132,12.132,0,0,1-.1,1.99,12.891,12.891,0,0,1-3.764,7.488,11.5,11.5,0,0,1-2.078,1.6,12.059,12.059,0,0,1-5.854,1.7C341.269,64.064,341.208,64.072,341.146,64.078Z" transform="translate(-334.172 -46.882)" fill="#fff"/>
									</svg>
								</span>
							</a>
						<?php endif; ?>
						<?php if ( $options_insta = get_field( 'options_insta', 'options' ) ) : ?>
							<a target="_blank" href="<?php echo esc_url( $options_insta ); ?>">
								<span class="icon icon-sm">
									<svg xmlns="http://www.w3.org/2000/svg" width="19.698" height="19.698" viewBox="0 0 19.698 19.698">
										<g id="Group_229" data-name="Group 229" transform="translate(0)">
											<path id="Path_34" data-name="Path 34" d="M-522.063,19.791c2.63,0,2.941.01,3.98.057a5.451,5.451,0,0,1,1.829.339,3.052,3.052,0,0,1,1.132.737,3.051,3.051,0,0,1,.737,1.132,5.45,5.45,0,0,1,.339,1.829c.047,1.039.057,1.35.057,3.98s-.01,2.941-.057,3.98a5.45,5.45,0,0,1-.339,1.829,3.052,3.052,0,0,1-.737,1.133,3.053,3.053,0,0,1-1.132.737,5.449,5.449,0,0,1-1.829.339c-1.038.047-1.35.057-3.98.057s-2.941-.01-3.98-.057a5.449,5.449,0,0,1-1.829-.339A3.053,3.053,0,0,1-529,34.807a3.054,3.054,0,0,1-.737-1.133,5.45,5.45,0,0,1-.339-1.829c-.047-1.038-.057-1.35-.057-3.98s.01-2.941.057-3.98a5.45,5.45,0,0,1,.339-1.829A3.054,3.054,0,0,1-529,20.925a3.051,3.051,0,0,1,1.133-.737,5.451,5.451,0,0,1,1.829-.339c1.039-.047,1.35-.057,3.98-.057m0-1.774c-2.675,0-3.01.011-4.061.059a7.23,7.23,0,0,0-2.391.458,4.828,4.828,0,0,0-1.744,1.136,4.827,4.827,0,0,0-1.136,1.745,7.225,7.225,0,0,0-.458,2.391c-.048,1.05-.059,1.386-.059,4.061s.011,3.01.059,4.061a7.225,7.225,0,0,0,.458,2.391,4.826,4.826,0,0,0,1.136,1.744,4.827,4.827,0,0,0,1.744,1.136,7.23,7.23,0,0,0,2.391.458c1.051.048,1.386.059,4.061.059s3.01-.011,4.061-.059a7.23,7.23,0,0,0,2.391-.458,4.827,4.827,0,0,0,1.744-1.136,4.826,4.826,0,0,0,1.136-1.744,7.227,7.227,0,0,0,.458-2.391c.048-1.05.059-1.386.059-4.061s-.011-3.01-.059-4.061a7.227,7.227,0,0,0-.458-2.391,4.827,4.827,0,0,0-1.136-1.745,4.828,4.828,0,0,0-1.744-1.136A7.23,7.23,0,0,0-518,18.076c-1.05-.048-1.386-.059-4.061-.059" transform="translate(531.912 -18.017)" fill="#fff"/>
											<path id="Path_35" data-name="Path 35" d="M-483.2,61.673a5.058,5.058,0,0,0-5.058,5.058,5.058,5.058,0,0,0,5.058,5.058,5.058,5.058,0,0,0,5.057-5.058,5.058,5.058,0,0,0-5.057-5.058m0,8.34a3.283,3.283,0,0,1-3.283-3.283,3.283,3.283,0,0,1,3.283-3.283,3.283,3.283,0,0,1,3.283,3.283,3.283,3.283,0,0,1-3.283,3.283" transform="translate(493.047 -56.882)" fill="#fff"/>
											<path id="Path_36" data-name="Path 36" d="M-402.678,50.266a1.182,1.182,0,0,1-1.182,1.182,1.182,1.182,0,0,1-1.182-1.182,1.182,1.182,0,0,1,1.182-1.182,1.182,1.182,0,0,1,1.182,1.182" transform="translate(418.966 -45.674)" fill="#fff"/>
										</g>
									</svg>
								</span>
							</a>
						<?php endif; ?>
					</div>
				</div>
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
