<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php ?>" class="title">Powrót do rankingu</a>

		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php
			if ( has_post_thumbnail() ) :
				echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
			endif;
		?>
	
</article><!-- /#post-<?php the_ID(); ?> -->
