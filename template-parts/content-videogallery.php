<div class="gallery">
 
   <?php while ( have_rows('video_gallery') ) : the_row(); 

    $preis = get_sub_field('preis'); ?>
   

     <div class="gallery__item card">
        
        <div class="video-wrapper card__media">
          <div><?php the_sub_field('video'); ?></div>
        </div>

        <div class="gallery__text card__text">
          <?php if( !empty($preis) ): ?>
            <h3 class="gallery__boldcircle boldcircle"><?php the_sub_field('preis'); ?></h3>
          <?php endif; ?> 

          <h2><?php the_sub_field('titel'); ?></h2>
          <h4 class="italic">Von: <?php the_sub_field('macherin'); ?></h4>
          <p><?php the_sub_field('beschreibung'); ?></p>
        </div>

    </div>

  <?php endwhile; ?>

</div>