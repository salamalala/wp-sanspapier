<?php $bild_halb = get_sub_field('bild_halbe_breite');

  if( !empty($bild_halb) ):
    // variables
    $url = $bild_halb['url'];
    $alt = $bild_halb['alt']; ?>
    
    <div class="half-width-box image-box-wrapper">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>