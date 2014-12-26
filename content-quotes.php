<?php

	$args = array(
		'post_type' => 'quotes',
		'posts_per_page' => 1,
		'orderby' => 'rand'
	);

	$the_query = new WP_Query( $args );
	
	?>


	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		<div class="quote">
			<p class="phrase"><?php the_field( 'phrase' ); ?></p>
			<p class="author"><?php the_field( 'author' ); ?></p>	
		</div>


	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>			