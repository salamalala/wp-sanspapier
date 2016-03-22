<div class="card half-width-box">

  <?php $titel = get_sub_field('titel'); ?>
  <?php $macherin = get_sub_field('macherin'); ?>
  <?php $beschreibung = get_sub_field('beschreibung'); ?>

  <!-- needs an extra div in order not to break in firefox due to flex on parent element -->
  <div>
    <div class="responsive-video">
      <?php the_sub_field('video'); ?>
    </div>
  </div>

  <!-- if no text element is there don't show white text box -->
  <?php if (!empty($titel) || !empty($macherin) || !empty($beschreibung)): ?>
  
    <div class="card__text">
      <h2><?php the_sub_field('titel'); ?></h2>
      
      <!-- otherwise 'von' would appear -->
      <?php if( !empty($macherin)): ?>
        <h4 class="italic">Von: <?php the_sub_field('macherin'); ?></h4>
      <?php endif; ?> 

      <p><?php the_sub_field('beschreibung'); ?></p>
    </div>
  <?php endif; ?> 

</div>

  
