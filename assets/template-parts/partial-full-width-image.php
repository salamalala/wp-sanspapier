<?php $bild_voll = get_sub_field('bild_volle_breite');

  if( !empty($bild_voll) ):
  // variables
  $url = $bild_voll['url'];
  $alt = $bild_voll['alt']; ?>
    
    <div class="full-width-box image-box-wrapper">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
    
  <?php endif; ?>