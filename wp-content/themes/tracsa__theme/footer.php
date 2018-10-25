	<div class="footer__img"></div>
	<footer class="container__grid2 footer">
		<div class="footer__bg"></div>
	    <!-- <h2 class="footer__title">CONTACTO</h2> -->
	    <main class="footer__main">
			<?php
			$misEntradas = new WP_Query( 'category_name=footer' );
			if ( $misEntradas->have_posts() ) :
			  while ( $misEntradas->have_posts() ): 
			    $misEntradas->the_post();
			?>
			<section class="footer__section">
				<h2 class="section__title" ><?php the_title(); ?></h2>
				<div class="section__container"> <?php the_content(); ?> </div>
			</section>
			<?php
			  endwhile;
			endif;
			?>
	    </main>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animationScroll.js"></script>
  </body>
</html>