<?php get_header();
  $nosotrosvid = VIDEOS.'/NOSOTROS.mp4'; 
  $nosotrosposter = IMAGES. '/nosotros.jpg';
  $reelvid = VIDEOS.'/REEL.mp4'; 
  $reelposter = IMAGES. '/reel.jpg';
  $cinevid = VIDEOS.'/CINE.mp4'; 
  $cineposter = IMAGES. '/cine.jpg'; 
  $motionvid = VIDEOS.'/MOTION GRAPHIC.mp4'; 
  $motionposter = IMAGES. '/motion graphics.png';
  $empvid = VIDEOS.'/COMUNICACION EMPRESARIAL.mp4'; 
  $empposter = IMAGES. '/comunicacion empresarial.jpg' ;
  $killavid = VIDEOS.'/KILLARY.mp4'; 
  $killaposter = IMAGES. '/killary.jpg'; 
  $url = home_url( '/' );
  ?>
<section id="homepage" class="group">
  <div class="fil1of2 padding15pxb">
     <a href="<?php echo $url.'nosotros' ?>"> 
      <div class="col1of3 vc">
        <video class="thevideo" poster="<?php print $nosotrosposter ?>" loop preload="auto" muted="muted" >
          <source src="<?php print $nosotrosvid ?>" type="video/mp4" >      
        </video>
      </div>
    </a>
    <a href="<?php echo $url.'reel' ?>"> 
      <div class="col1of3 vc ">
        <video class="thevideo" poster="<?php print $reelposter ?>" loop preload="auto" muted="muted" >
          <source src="<?php print $reelvid ?>" type="video/mp4" >      
        </video>
      </div>
    </a>
    <a href="<?php echo $url.'cine' ?>"> 
      <div class="col1of3 vc">
        <video class="thevideo" poster="<?php print $cineposter ?>" loop preload="auto" muted="muted" >
          <source src="<?php print $cinevid ?>" type="video/mp4" >      
        </video>
      </div>
    </a>
  </div>
  <div class="fil1of2 padding15pxt">
    <a href="<?php echo $url.'motion-graphics' ?>">   
      <div class="col1of3 vc">
          <video class="thevideo" poster="<?php print $motionposter ?>" loop preload="auto" muted="muted" >
          <source src="<?php print $motionvid ?>" type="video/mp4" >      
        </video>
      </div>
    </a>
    <a href="<?php echo $url.'comunicacion-empresarial' ?>"> 
      <div class="col1of3 vc">
        <video class="thevideo" poster="<?php print $empposter ?>" loop preload="auto" muted="muted" >
          <source src="<?php print $empvid ?>" type="video/mp4" >      
        </video>
      </div>
    </a>
    <a href="<?php echo $url.'killary' ?>"> 
      <div class="col1of3 vc">
        <video class="thevideo" poster="<?php print $killaposter ?>" loop preload="auto" muted="muted" >
          <source src="<?php print $killavid ?>" type="video/mp4" >      
        </video>
      </div>
    </a>
  </div>
</section>
<?php get_footer(); ?>