<div class="gallery">
 
   <?php while ( have_rows('video_gallery') ) : the_row(); 

    $preis = get_sub_field('preis'); ?>
   

     <div class="gallery-card">
        
        <div class="video-wrapper">
          <div class="video"><?php the_sub_field('video'); ?></div>
        </div>
        <div class="gallery-text">

          <?php if( !empty($preis) ): ?>
            <h3 class="boldcircle"><?php the_sub_field('preis'); ?></h3>
          <?php endif; ?> 

          <h2><?php the_sub_field('titel'); ?></h2>
          <h4 class="italic">Von: <?php the_sub_field('macherin'); ?></h4>
          <p><?php the_sub_field('beschreibung'); ?></p>
        </div>

    </div>

  <?php endwhile; ?>

</div>