<?php if ( have_rows( 'options_sponsors', 'options' ) ) : ?>
    <div class="container sponsors">
        <div class="row">
            <div class="col sponsors__title grey">Sponsorują nas</div>
        </div>
        <div class="row sponsors__logos">
            <?php while ( have_rows( 'options_sponsors', 'options' ) ) :
            the_row(); ?>
                <?php
                $options_sponsor = get_sub_field( 'options_sponsor', 'options' );
                if ( $options_sponsor ) : ?>
                    <div class="col-sm-6 col-md-3 col-xl-2 sponsors__logo">
                        <img src="<?php echo esc_url( $options_sponsor['url'] ); ?>" alt="<?php echo esc_attr( $options_sponsor['alt'] ); ?>" />
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>