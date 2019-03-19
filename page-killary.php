<?php //Template Name: Killary Page
	$custom = get_post_custom($post->ID);
	$package = $custom["package"][0];
	$video = VIDEOS.'/'.$package;
	global $post;
?>
<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>	
</head>
<body id="killary">
  <header>
    <div class="header group">
      <div class="col1of3">
        <div class="menu-social">
          <?php
            $facebook = get_option('dohko_facebook');
            $youtube = get_option('dohko_youtube');
            $instagram = get_option('dohko_instagram');
            $googleplus = get_option('dohko_googleplus');
            $twitter = get_option('dohko_twitter');
            $mobile = get_option('dohko_mobile');
          ?>
          <?php if($facebook): ?>
            <a href="<?php print $facebook; ?>" target="_blank">
              <img src="<?php print IMAGES.'/facebook.png'; ?>" alt="Facebook" />
            </a>
          <?php endif; ?>
          <?php if($youtube): ?>
            <a href="<?php print $youtube; ?>" target="_blank">
              <img src="<?php print IMAGES.'/youtube.png'; ?>" alt="Youtube" />
            </a>
          <?php endif; ?>
          <?php if($mobile): ?>
            <a href="https://api.whatsapp.com/send?phone=<?php print $mobile; ?>" target="_blank">
              <img src="<?php print IMAGES.'/whatsapp.png'; ?>" alt="WhatsApp" />
            </a>
          <?php endif; ?>
          <?php if($instagram): ?><a href="<?php print $instagram; ?>" target="_blank"><i class="fa fa-instagram sn_icons" aria-hidden="true"></i></a><?php endif; ?>
          <?php if($googleplus): ?><a href="<?php print $googleplus; ?>" target="_blank"><i class="fa fa-google-plus-official sn_icons" aria-hidden="true"></i></a><?php endif; ?>
          <?php if($twitter): ?><a href="<?php print $twitter; ?>" target="_blank"><i class="fa fa-twitter sn_icons" aria-hidden="true"></i></a><?php endif; ?>
        </div>
      </div>
      <div class="col1of3">
      </div>
    	<div class="col1of3" style="float:right;">
        <div class="header-logo">
          <?php $logo= get_option( 'dohko_logo');
          	if (strcmp($logo, '') === 0) { $logo = IMAGES.'/aguardiente logo.png'; } 
            $url = home_url( '/' );
           ?>
          <a href="<?php echo esc_url($url) ?>"><img id="logo-header" src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
        </div>
      </div>
    </div>
    <div class="header-mobile">
      <div class="header-logo">
        <?php $logo= get_option( 'dohko_logo');
          if (strcmp($logo, '') === 0) { $logo = IMAGES.'/aguardiente logo.png'; } 
          $url = home_url( '/' );
         ?>
        <a href="<?php echo esc_url($url) ?>"><img id="logo-header" src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
      </div>
    </div>
  </header>
	<section id="killary-albums" class="group">
		<div class="page-title" style="display:none;">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="white-square group">
			<div class="w60">
				<img class="img-albums" src="<?php print IMAGES.'/Cover Canto al Amanecer.png'; ?>" alt="Canto al Amanecer" />
				<img class="img-albums" src="<?php print IMAGES.'/Cover Origenes.png'; ?>" alt="Origenes" />
				<img class="img-albums" src="<?php print IMAGES.'/Cover Luna Arequipeña.png'; ?>" alt="Luna Arequipeña" />
			</div>
			<div class="w40">
				<img class="img-killa-quotes-1" src="<?php print IMAGES.'/Killary-logo.png'; ?>" alt="Killary" />
				<img class="img-killa-quotes-2" src="<?php print IMAGES.'/Killary-quote.png'; ?>" alt="Killary q" />
				<a href="https://www.killaryperu.com" target="_blank">
					<img class="img-killa-quotes-3" src="<?php print IMAGES.'/killary-link-page.png'; ?>" alt="Killary" />
				</a>
			</div>		
		</div>
	</section>
	<?php get_footer(); ?>