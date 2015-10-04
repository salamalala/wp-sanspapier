<div class="half-width-box box pink-box">

  <?php $icon = get_sub_field('icon');

    if( !empty($icon) ):
    // variables
    $url = $icon['url'];
    $alt = $icon['alt']; ?>
    <div class="icon-wrapper">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="icon-in-half-width-box"/>
    </div>
    
    <?php endif; ?>

  <?php if( !empty(get_sub_field('titel')) ): ?>
    <h2><?php the_sub_field('titel'); ?></h2>
  <?php endif; ?>
  <p><?php the_sub_field('text'); ?></p> 
  
  <?php if( !empty(get_sub_field('link:_mehr_informationen')) && empty(get_sub_field('link:_weiterlesen')) ): ?>
    <a href="<?php the_sub_field('link:_mehr_informationen'); ?>" class="minorlink-white" target="_blank">Mehr Informationen</a>
  <?php endif; ?>

  <?php if( !empty(get_sub_field('link:_weiterlesen')) && empty(get_sub_field('link:_mehr')) ): ?>
    <a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink-white">Weiterlesen</a>
  <?php endif; ?>

  </div>
