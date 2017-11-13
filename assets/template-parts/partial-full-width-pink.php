<div class="full-width-box box big-letter-box pink-box">
  
  <?php $titel = get_sub_field('titel'); ?>
  <?php $link_mehr = get_sub_field('link:_mehr'); ?>
  <?php $link_weiterlesen = get_sub_field('link:_weiterlesen'); ?>
  
  <?php if( !empty($titel) ): ?>
    <h1><?php the_sub_field('titel'); ?></h1>
  <?php endif; ?>
  <p class="big-paragraph"><?php the_sub_field('text'); ?></p> 
  
  <?php if( !empty($link_mehr) && empty($link_weiterlesen) ): ?>
    <a href="<?php the_sub_field('link:_mehr'); ?>" class="minorlink-white" target="_blank">Mehr Informationen</a>
  <?php endif; ?>

  <?php if( !empty($link_weiterlesen) && empty($link_mehr) ): ?>
    <a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink-white">Weiterlesen</a>
  <?php endif; ?>

</div>