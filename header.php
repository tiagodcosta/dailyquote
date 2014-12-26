<!DOCTYPE html>
<html>
	<head>

		<title>
			<?php 

				wp_title( '-' , true, 'right' );

				bloginfo( 'name' );

			?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<?php wp_head(); ?>
	</head>
	<body>	
		<div class="container">
	
	<div class="top">
		<h1><a href="<?php bloginfo( 'siteurl' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	</div>