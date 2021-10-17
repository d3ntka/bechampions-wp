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
            <div class="col-lg-5">
                <div class="news__cont">
                    <div class="title pl-5">
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
                                echo '<div class="">';
                                    echo '<div class="news__title pb-4">';
                                        the_title();
                                    echo '</div>';

                                    echo '<div class="news__body pb-3">';
                                        the_content();
                                    echo '</div>';

                                    // echo '<a class="btn btn-dark" href="';
                                    //     the_permalink();
                                    // echo '">Zobacz więcej</a>';
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
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="tournaments">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="tournaments__closest">
                            <i class="icon-trophy"></i>
                            Najbliższy turniej
                        </div>
                        <a href="/events" class="tournaments__more">
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
    <section class="sponsors__cont">
        <?php get_template_part("template-parts/sponsors") ; ?>
    </section>
    

		

</section>


<section class="about d-flex align-items-center" id="about">
    <div class="container">
        <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div>
                        <div class="title">
                            Kim jesteśmy?
                        </div>
                        <h1 class="mt-4 mb-5">
                            Czym jest BeChampions?
                        </h1>
                        <p>
                            BeChampions to miejsce w którym ambitni gracze Valorant mają szansę na rywalizację na prawdziwej scenie podczas finałów LAN-owych każdego miesiąca rozgrywek. To miejsce w którym wszyscy wspólnie pracują nad rozwinięciem sceny Valorant w Polsce. 
                        </p>
                        <br>
                        <p>
                            Nie czekaj - dołącz i stań się zawodnikiem, uczestnikim, widzem - stań się częścią Valorant.
                        </p>
                    </div>
                </div>
                <div class="col-lg-auto d-flex align-items-center justify-content-center mt-5 mt-lg-0">
                    <img class="about__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/sygnet-fill.svg" alt="">
                </div>
        </div>
    </div>
</section>

</div><!-- / home -->

<?php
get_footer();