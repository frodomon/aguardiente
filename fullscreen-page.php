<?php //Template Name: Full-Screen Page
	get_header();  
	
	$custom = get_post_custom($post->ID);
	$package = $custom["package"][0];
	$video = VIDEOS.'/'.$package

?>
<video autoplay muted loop id="myVideo">
  <source src="<?php print($video) ?>" type="video/mp4">

</video>

<div class="fullscreen-footer">
	<?php get_footer(); ?>
</div>