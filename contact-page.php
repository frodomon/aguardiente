<?php //Template Name: Contact Page
	get_header();
	$telephone = get_option('dohko_telephone');
	$mobile = get_option('dohko_mobile');
	$whatsapp = get_option('dohko_whatsapp');
	$email = get_option('dohko_email');
	$facebook = get_option('dohko_facebook');
  $youtube = get_option('dohko_youtube');
?>   

<section id="video-page" class="group">
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="white-box">
		<div class="full-width group">
			<div class="w30 contact-title">
				<?php if($mobile ): ?> 
					<p><strong>NÚMERO:  </strong><a href="tel:<?php print $mobile; ?>">98797388</a></p>
				<?php	endif; ?>
				<?php if($email): ?> 
					<p><strong>MAIL: </strong><a href='<?php print $email; ?>'><?php print $email; ?></a></p>
				<?php	endif; ?>
				<p><strong>SOCIAL: </strong></p>
					<div>
						<?php if($facebook): ?> 
							<p><a href='<?php print $facebook; ?>' target="_blank">FACEBOOK</a></p>
						<?php	endif; ?>
						<?php if($youtube): ?> 
							<p><a href='<?php print $youtube; ?>' target="_blank">YOUTUBE</a></p>
						<?php	endif; ?>
						<?php if($mobile): ?> 
							<p><a href="https://api.whatsapp.com/send?phone=<?php print $mobile; ?>" target="_blank">WHATSAPP</a></p>
						<?php	endif; ?>
					</div>
			</div>
			<div class="w70">
				<div class='contact-form'>
					<?php echo do_shortcode('[contact-form-7 id="25" title="Formulario de Contacto"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>