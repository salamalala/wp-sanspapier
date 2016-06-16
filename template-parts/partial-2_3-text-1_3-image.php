<div class="box two-third-box not-right-element-in-row">

  <?php $titel = get_sub_field('box_links_titel'); ?>
  <?php $link_mehr = get_sub_field('link:_mehr'); ?>
  <?php $link_weiterlesen = get_sub_field('link:_weiterlesen'); ?>

  <?php if( !empty($titel) ): ?>
    <h2><?php the_sub_field('box_links_titel'); ?></h1>
  <?php endif; ?>
  <p><?php the_sub_field('box_links_text'); ?></p>


  <?php if( !empty($link_mehr) && empty($link_weiterlesen) ): ?>
    <a href="<?php the_sub_field('link:_mehr'); ?>" class="minorlink-white" target="_blank">Mehr Infos</a>
  <?php endif; ?>

  <?php if( !empty($link_weiterlesen) && empty($link_mehr) ): ?>
    <a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink-dark">Weiterlesen</a>
  <?php endif; ?>

</div>

<?php $bild_rechts = get_sub_field('bild_rechts');

  if( !empty($bild_rechts) ):
  // variables
    $url = $bild_rechts['url'];
    $alt = $bild_rechts['alt']; ?>

    <div class="one-third-box image-box-wrapper right-element-in-row">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>
