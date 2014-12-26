<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
		<p class="phrase"><?php the_field( 'phrase' ); ?></p>
		<p class="author"><?php the_field( 'author' ); ?></p>
		<hr>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>

<?php get_footer(); ?>
