<?php //Template Name: About Us Page
	get_header();  
?>
<section id="video-page" class="group">
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	<div class="white-box">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="page-description">
				<?php the_content(); ?>
			</div>			
		<?php endwhile; else: ?>
		<?php endif; ?>
	
		<div class="full-width">
			<img class="img-albums" src="<?php print IMAGES.'/sobre nosotros.png'; ?>" alt="Nosotros" />
		</div>
	</div>

</section>
<?php get_footer(); ?>