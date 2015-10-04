<div class="half-width-box box">
  
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
    <h2><?php the_sub_field('titel'); ?></h1>
  <?php endif; ?>
  <p><?php the_sub_field('text'); ?></p>
  
  <?php if( !empty(get_sub_field('link_weiterlesen')) && empty(get_sub_field('link:_mehr')) ): ?>
    <a href="<?php the_sub_field('link_weiterlesen'); ?>" class="minorlink-dark">Weiterlesen</a>
  <?php endif; ?>

  <?php if( !empty(get_sub_field('link:_mehr')) && empty(get_sub_field('link_weiterlesen')) ): ?>
    <a href="<?php the_sub_field('link:_mehr'); ?>" class="minorlink-dark">Mehr Informationen</a>
  <?php endif; ?>

</div>