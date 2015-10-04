<div class="box one-third-box  ">
  
  <h2><?php the_sub_field('box_links_titel'); ?></h1>
  <p><?php strip_tags(the_sub_field('box_links_text')); ?></p>
    
  <?php if( !empty(get_sub_field('box_links_link:_mehr_informationen')) && empty(get_sub_field('box_links_link:_weiterlesen')) ): ?>
    <a href="<?php the_sub_field('box_links_link:_mehr_informationen'); ?>" class="minorlink-white" target="_blank">Mehr Infos</a>
  <?php endif; ?>

  <?php if( !empty(get_sub_field('box_links_link:_weiterlesen')) && empty(get_sub_field('box_links_link:_mehr_informationen')) ): ?>
    <a href="<?php the_sub_field('box_links_link:_weiterlesen'); ?>" class="minorlink-dark">Weiterlesen</a>
  <?php endif; ?>

</div>    

<?php $bild_rechts = get_sub_field('bild_rechts');

if( !empty($bild_rechts) ):
// variables
$url = $bild_rechts['url'];
$alt = $bild_rechts['alt']; ?>

  <div class="two-third-box image-box-wrapper right-element-in-row">
    <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
  </div>
<?php endif; ?>