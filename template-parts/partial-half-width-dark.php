<div class="half-width-box box dark-box">
    
  <?php $icon = get_sub_field('icon');


    if( !empty($icon) ):
    // variables
    $url = $icon['url'];
    $alt = $icon['alt']; ?>
    <div class="icon-wrapper">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="icon-in-half-width-box"/>
    </div>
    
    <?php endif; ?>
  
  <?php $titel = get_sub_field('titel'); ?>
  <?php $link_mehr = get_sub_field('link:_mehr'); ?>
  <?php $link_weiterlesen = get_sub_field('link:_weiterlesen'); ?>

  <?php if( !empty($titel) ): ?>
    <h2><?php the_sub_field('titel'); ?></h1>
  <?php endif; ?>
  <p><?php the_sub_field('text'); ?></p>
  
  <?php if( !empty($link_mehr) && empty($link_weiterlesen) ): ?>
    <a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink-white">Weiterlesen</a>
  <?php endif; ?>

  <?php if( !empty($link_weiterlesen) && empty($link_mehr) ): ?>
    <a href="<?php the_sub_field('link:_mehr'); ?>" class="minorlink-white">Mehr Informationen</a>
  <?php endif; ?>

</div>