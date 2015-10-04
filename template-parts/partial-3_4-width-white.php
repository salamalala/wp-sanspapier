<div class="box three-quarter-box">
  <?php if( !empty(get_sub_field('titel')) ): ?>
    <h1><?php the_sub_field('titel'); ?></h1>
  <?php endif; ?>
  <p><?php the_sub_field('text'); ?></p>
  
  <?php if( !empty(get_sub_field('link:_mehr')) && empty(get_sub_field('link:_weiterlesen')) ): ?>
    <a href="<?php the_sub_field('link:_mehr'); ?>" class="minorlink-white" target="_blank">Mehr Informationen</a>
  <?php endif; ?>

  <?php if( !empty(get_sub_field('link:_weiterlesen')) && empty(get_sub_field('link:_mehr')) ): ?>
    <a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink-dark">Weiterlesen</a>
  <?php endif; ?>

</div>