<?php //Template Name: Video Embed No-TextPage
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
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="page-description">
				<?php the_content(); ?>
			</div>			
		<?php endwhile; else: ?>
		<?php endif; ?>
	<div class="white-box-no-padding">
		<div class="video-embed-notext">
			<video id="video-embed" controls width=160; height=90 >
	  		<source src="<?php print($video) ?>" type="video/mp4">
			</video>
		</div>
	</div>

</section>
<?php get_footer(); ?>