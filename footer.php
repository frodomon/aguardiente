		<footer >
			<div class="header-mobile">
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
              <img src="<?php print IMAGES.'/whatsapp.png'; ?>" alt="Youtube" />
            </a>
          <?php endif; ?>
          <?php if($instagram): ?><a href="<?php print $instagram; ?>" target="_blank"><i class="fa fa-instagram sn_icons" aria-hidden="true"></i></a><?php endif; ?>
          <?php if($googleplus): ?><a href="<?php print $googleplus; ?>" target="_blank"><i class="fa fa-google-plus-official sn_icons" aria-hidden="true"></i></a><?php endif; ?>
          <?php if($twitter): ?><a href="<?php print $twitter; ?>" target="_blank"><i class="fa fa-twitter sn_icons" aria-hidden="true"></i></a><?php endif; ?>

        </div>
			</div>
			<menu>
    		<?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'sf-menu' )); ?>
    	</menu>
		</footer>
			<!-- End Footer Information -->
			<?php wp_footer(); ?>  
			<?php print get_option('dohko_analytics'); ?>
	</div>
</body>
</html>