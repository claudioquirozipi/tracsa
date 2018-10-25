
<?php get_header(); ?>
<main class="wrap">
	<?php
		
		if ( have_posts() ) :
		  while ( have_posts() ): 
		    the_post();
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