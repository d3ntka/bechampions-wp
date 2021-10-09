<?php
/**
 * Template Name: Home
 * 
 *
 */


get_header();
?>

<?php
$query_args = array(
	'posts_per_page' => 3,
	// 'nopaging' => true,
	'order' => 'DESC',
);

// The Query
$the_query = new WP_Query( $query_args );

?>

<div class="home">

<section class="news">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="title">
                    Gorące nowości
                </div>
                <?php
                // The Loop
                if ( $the_query->have_posts() ) {
                ?>
                <div class="swiper" id="news-swiper">
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php
                    while ( $the_query->have_posts() ) {

                        $the_query->the_post();
                        echo '<div class="swiper-slide">';
                            echo '<div class="news__cont">';
                                echo '<div class="news__title">';
                                    the_title();
                                echo '</div>';

                                echo '<div class="news__body">';
                                    the_excerpt();
                                echo '</div>';

                                echo '<a class="btn btn-dark" href="';
                                    the_permalink();
                                echo '">Zobacz więcej</a>';
                            echo '</div>';
                        echo '</div>';
                    }?>

                </div>


                </div>

                <?php 
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {

                }

                ?>
            </div>
            <div class="col-lg-6">
                <div class="tournaments">
                    <div class="d-flex justify-content-between">
                        <div class="tournaments__closest grey">
                            Najbliższy turniej
                        </div>
                        <a href="" class="tournaments__more">
                            Zobacz wszystkie
                        </a>
                    </div>
                    <div>
                        <?php echo do_shortcode('[MEC id="33"]'); ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-secondary">
                            Zapisz się do turnieju
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<section class="sponsors">
<div class="container">
    <div class="row">
        <div class="col grey">Sponsorują nas</div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
</div>
</section>


<section class="about d-flex align-items-center" id="about">
    <div class="container">
        <div class="row align-items-center">
                <div class="col-md-6">
                    <div>
                        <div class="title">
                            Kim jesteśmy?
                        </div>
                        <h1 class="mb-5">
                            Czym jest BeChampions?
                        </h1>
                        <p>
                            BeChampions to miejsce w którym ambitni gracze Valoranta mają szansę stanąć na prawdziwej scenie esportowej i spełnić swoje marzenia! 
                        </p>
                        <p>
                            Tutaj będzie pewnie coś jeszcze, więc dodaję to żeby tekst był w miarę dokładny!
                        </p>
                    </div>
                </div>
        </div>
    </div>
</section>

</div><!-- / home -->

<?php
get_footer();