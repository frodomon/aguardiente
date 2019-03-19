<?php //Template Name: Video Embed Page
	get_header();  
	$custom = get_post_custom($post->ID);
	$package = $custom["package"][0];
	$video = VIDEOS.'/'.$package;
	global $post;
?>
<section id="video-page" class="group">
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="white-box">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="page-description">
				<?php the_content(); ?>
			</div>			
		<?php endwhile; else: ?>
		<?php endif; ?>
	
		<div class="video-embed">
			<video id="video-embed" controls width=160; height=90 >
	  		<source src="<?php print($video) ?>" type="video/mp4">
			</video>
		</div>
	</div>

</section>
<?php get_footer(); ?>