<?php
/**
 * Template Name: Ranking
 * 
 *
 */


get_header();

?>

<?php


$query_args = array(
	'posts_per_page' => '-1',
	'post_type' => 'team',
	'post_status' => 'publish',
	'order' => 'DESC',
	'meta_key' => 'global_ranking_points',
	'orderby' => 'meta_value_num',
);

// The Query
$the_query = new WP_Query( $query_args );

$position = 1;

?>

<div class="ranking">
<div class="container">
    <div class="ranking__title">
        <div class="title">Ranking globalny</div>
        <h1>BeChampions Poland Tour - Circuit Points</h1>
    </div>

<?php


// The Loop
if ( $the_query->have_posts() ) { ?>
    <div class="teams">
    <?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
        $link = sanitize_title(get_the_title());
        ?>
        <div class="row team mb-3">
            <div class="col-lg-3">
                <div class="team__about">
                    <div class="team__about--nr">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.363" height="10.432" viewBox="0 0 16.363 10.432">
                            <path id="Path_319" data-name="Path 319" d="M439.058,1208.275l.95-1.627h-3.087l-.766,1.314-.184.313h-2.694l.95-1.628h-3.085l-3.467,5.941H424.35l1.653,2.863h0l-.95,1.627h3.085l.95-1.627h2.7l-.95,1.628h3.084l3.468-5.943h3.325Zm-5.6,4.313h-2.7l.847-1.452h2.7Z" transform="translate(-424.35 -1206.647)" fill="#c0e6fc"/>
                        </svg>
                        <?=$position?>
                    </div>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="col-auto team__about--thumb">
                            <?php echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'thumb' ) . '</div>'; ?>
                        </div>
                    <?php endif; ?>


                    <h2 class="team__about--name"><?php the_title(); ?></h2>

                    <?php if ($global_ranking_points = get_field( 'global_ranking_points' )); ?>
                    <div class="team__about--points">
                        <?php 
                            echo "(" . $global_ranking_points . "p.)";
                        ?>
                    </div>
                </div>
                <div class="collapse" id="collapse-<?=$link?>" onClick="event.stopPropagation();">
                    <div class="row team__links">
                        <div class="col">
                            <a class="btn btn-secondary" href="<?php echo get_permalink(); ?>">Drużyna</a>
                        </div>
                        <div class="col">
                        <?php if ( $team_vlrgg = get_field( 'team_vlrgg') ) : ?>
                            <a class="btn vlr-btn" href="<?php echo esc_url( $team_vlrgg ); ?>">
                                VLR.GG
                            </a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        
            <div class="col-lg-9 col-xl-8 team__player--cont">
                <?php if ( have_rows( 'team_member' ) ) : ?>
                    <!-- <div class="team__player--cont"> -->
                        <?php while ( have_rows( 'team_member' ) ) :
                        the_row(); ?>
                            <div class="team__player">
                                <?php $team_member_img = get_sub_field( 'team_member_img' );
                                $size = 'small';
                                if ( $team_member_img ) {
                                    $url = wp_get_attachment_url( $team_member_img ); ?>
                                    <div class="team__player--img collapse collapsed" id="collapse-<?=$link?>">
	                                    <?php echo wp_get_attachment_image( $team_member_img, $size ); ?>
                                    </div>
                                <?php }; ?>
                                <div class="collapse collapsed" id="collapse-<?=$link?>">
                                    <div class="team__player--spacer"></div>
                                </div>

                                <?php if ( $team_member_name = get_sub_field( 'team_member_name' ) ) : ?>
                                    <div class="team__player--name">
                                        <?php echo esc_html( $team_member_name ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <!-- </div> -->
                <?php endif; ?>	
            </div>
            <div>
                <button class="btn-tm collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?=$link?>" aria-expanded="false" aria-controls="collapse-<?=$link?>">
                    <span class="chevron chevron-up"></span>
                </button>
            </div>


        </div> <!-- / row -->
        <?php
        $position++;
	}
	/* Restore original Post Data */
	wp_reset_postdata();
    ?>







</div>

<?php
    } else {
        // no posts found
        echo "No posts";
    }
?>

</div><!-- / container -->
</div><!-- / ranking -->

<?php
get_footer();