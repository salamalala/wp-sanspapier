<div class="full-width-box box dark-box">
  
  <?php if( !empty(get_sub_field('titel')) ): ?>
    <h1><?php the_sub_field('titel'); ?></h1>
  <?php endif; ?>
  <p class="big-paragraph"><?php the_sub_field('text'); ?></p> 
  
  <?php if( !empty(get_sub_field('link:_mehr_informationen')) && empty(get_sub_field('link:_weiterlesen')) ): ?>
    <a href="<?php the_sub_field('link:_mehr_informationen'); ?>" class="minorlink-white" target="_blank">Mehr Informationen</a>
  <?php endif; ?>

  <?php if( !empty(get_sub_field('link:_weiterlesen')) && empty(get_sub_field('link:_mehr')) ): ?>
    <a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink-white">Weiterlesen</a>
  <?php endif; ?>

</div>