






<?php get_header(); ?>
<header class="container__grid header">
		<div class="header__img"></div>
		<div class="header__idioma">
			<div class="header--br"></div>
			<div class="header--ar"></div>
		</div>
		<h1 class="header__titulo"><span>MÁS DE 4.000</span><br>CLIENTES NOS AVALAN</h1>
		<div class="header__clientes"></div>
	</header>
<main class="wrap">
		<?php
		$misEntradas = new WP_Query( 'category_name=index' );
		if ( $misEntradas->have_posts() ) :
		  while ( $misEntradas->have_posts() ): 
		    $misEntradas->the_post();
		?>
			<section class="post">
			<?php the_content(); ?> 
			</section>
		<?php
		  endwhile;
		endif;
		?>

	
</main>
<?php get_footer(); ?>

