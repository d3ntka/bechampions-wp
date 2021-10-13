<?php
/**
 * The template for displaying content in the single.php template.
 *
 */

$global_ranking_points = 0;
?>

<article id="team-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php get_home_url()?>/ranking/" class="title d-inline-flex align-items-center"><i class="chevron-left"></i> <span>Powrót do rankingu</span></a>

	<div class="d-flex justify-content-between align-items-center">
		<h1 class=""><?php the_title(); ?></h1>
		<?php if ( $team_vlrgg = get_field( 'team_vlrgg' ) ) : ?>
			<div>
				<a class="btn vlr-btn" href="<?php echo esc_url( $team_vlrgg ); ?>">
					VLR.GG <i class="chevron-right"></i>
				</a>
			</div>
		<?php endif; ?>
	</div>
		
	<div class="row">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="col-auto team__thumb">
				<?php echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>'; ?>
			</div>
		<?php endif; ?>

		<?php if ( have_rows( 'team_member' ) ) : ?>
			<?php while ( have_rows( 'team_member' ) ) :
				the_row(); ?>
				<div class="col-auto">
					<div class="team__player">
						<?php $team_member_img = get_sub_field( 'team_member_img' );
						if ( $team_member_img ) : ?>
							<div class="team__player--img">
								<img src="<?php echo esc_url( $team_member_img['url'] ); ?>" alt="<?php echo esc_attr( $team_member_img['alt'] ); ?>" />
							</div>
						<?php endif; ?>
						<?php if ( $team_member_name = get_sub_field( 'team_member_name' ) ) : ?>
							<div class="team__player--name">
								<?php echo esc_html( $team_member_name ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>	
	</div>
	<div class="row">
		<?php if ( $team_coach = get_field( 'team_coach' ) ) : ?>
			<span class="team__coach">
				Trener: <?php echo esc_html( $team_coach ); ?>
			</span>
		<?php endif; ?>
	</div>

	<?php if ( have_rows( 'team_ranking' ) ) : ?>
		<div class="team__ranking--cont">
			<div class="team__ranking--title">
				<i class="icon icon-ranking"></i> 
				<span>
					Historia rankingu
				</span> 
			</div>
			<div class="row">
			<?php while ( have_rows( 'team_ranking' ) ) :
				the_row(); ?>
					<div class="col-md-6">
						<div class="team__ranking--event">
							<?php if ( $team_ranking_date = get_sub_field( 'team_ranking_date' ) ) : ?>
							<div class="team__ranking--date">
								<?php echo esc_html( $team_ranking_date ); ?>
							</div>
							<?php endif; ?>
							<?php if ( $team_ranking_points = get_sub_field( 'team_ranking_points' ) ) : ?>
							<div class="team__ranking--points">
								<?php echo formatNum($team_ranking_points); ?> pkt
							</div>
							<?php endif; ?>
							<?php if ( $team_ranking_name = get_sub_field( 'team_ranking_name' ) ) : ?>
							<div class="team__ranking--name">
								<?php echo esc_html( $team_ranking_name ); ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php $global_ranking_points += $team_ranking_points; ?>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>



		





</article><!-- /#post-<?php the_ID(); ?> -->
