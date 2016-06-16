<?php $bild_links = get_sub_field('bild_links');

if( !empty($bild_links) ):
// variables
$url = $bild_links['url'];
$alt = $bild_links['alt']; ?>

  <div class="two-third-box image-box-wrapper not-right-element-in-row ">
    <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
  </div>
<?php endif; ?>

<div class="box one-third-box right-element-in-row">

  <?php $titel = get_sub_field('box_rechts_titel'); ?>
  <?php $link_mehr = get_sub_field('link:_mehr'); ?>
  <?php $link_weiterlesen = get_sub_field('link:_weiterlesen'); ?>

  <?php if( !empty($titel) ): ?>
    <h2><?php the_sub_field('box_rechts_titel'); ?></h1>
  <?php endif; ?>
  <p><?php the_sub_field('box_rechts_text'); ?></p>


  <?php if( !empty(get_sub_field('link:_mehr')) && empty(get_sub_field('link:_weiterlesen')) ): ?>
    <a href="<?php the_sub_field('link:_mehr'); ?>" class="minorlink-dark" target="_blank">Mehr Informationen</a>
  <?php endif; ?>

  <?php if( !empty(get_sub_field('link:_weiterlesen')) && empty(get_sub_field('link:_mehr')) ): ?>
    <a href="<?php the_sub_field('link:_weiterlesen'); ?>" class="minorlink-dark">Weiterlesen</a>
  <?php endif; ?>

</div>
