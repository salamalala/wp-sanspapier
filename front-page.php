<?php /* Template Name: Front-Page */ 
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wp-sanspapier
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <script src="//use.typekit.net/diy3rqx.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header role="banner">
      <div class="navigation-wrapper">

        <div class="block-nav logo-left">

          <a href="#" class="logo">

           <img src= "<?php  
            echo get_template_directory_uri(); ?>/assets/dist/images/logo_def.svg" 
            alt="Logo Sans Papier Beratungsstelle"
            > 

          </a>

        </div>
        
        <div class="block-nav menu-right ">
            <a href="#" class="menu-button " id="js-mobile-menu">
            <span class="menu-size">Menu</span>

            <div class="hamburger-icon">
              <span></span>
              <span></span>
              <span></span>
            </div>

            </a>
        </div>

        <nav role="navigation">

          <?php 

          $args = array(
            'container'       => 'ul',
            'menu_class'      => 'navigation-menu show',
            'menu_id'         => 'js-navigation-menu',
            'depth'           => 0,
            'walker'          => new My_Sub_Menu()
            );
          wp_nav_menu( $args ) 

          ?>



        </nav>
      </div>

      <div class="name-wrapper">
        <h1>Berner Beratungs&shystelle </h1> <h1>für Sans-Papiers</h1>
      </div>

    </header>

    <div id="content" class="site-content">

     <main>

       <div class="full-width-box box wer">
         <p class="big-paragraph quote">
           Wir <a class="highlighted" href="#">beraten und informieren MigrantInnen</a>, die in der Schweiz leben, ohne eine Aufenthalts&shybewilligung zu besitzen. Zudem leisten wir <a class="highlighted" href="#">Sensibilisierungs- und Informationsarbeit </a>in der Region Bern.
         </p>
       </div>

       <div class="full-width-box box">
         <h5>Fundraising</h5>
         <h2>Solilauf 2015 - jetzt anmelden</h2>
         <h4 class="italic">12.05.2014 | Karin Jenni</h4>
         <p class="big-paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptates nulla possimus dicta dolorum ex autem ducimus, vero impedit veritatis libero dolorem nemo quis perspiciatis omnis nesciunt eligendi adipisci culpa...
        </p>
        <a class="minorlink" href="#">Weiterlesen</a>
      </div>

      <div class="beratungsbox">

      <ul class="tabs">
        <li><a href="#beratung-bern"><h3>Bern</h3></a></li>
        <li><a href="#beratung-biel"><h3>Biel</h3></a></li>
      </ul>

        <?php
          if( have_rows('beratung') ):
            while ( have_rows('beratung') ) : the_row();  ?>

            <div class="beratung box" id="beratung-bern">
            
              <h3>Beratungszeiten <span class="hide-when-small"><?php the_sub_field('beratungsort'); ?></span></h3>
              <p><?php the_sub_field('beratungszeiten'); ?></p>
         
              <div class="map" id="map-canvas"></div>
            
              <a class="minorlink" href="#">Mehr Informationen</a>
            
            </div>


            <?php endwhile; ?>
          <?php endif; ?> 
             



    </div>
    <!-- End of Beratungsbox -->
    
    <div class="linksbox">

      <a class="mainlink" href="#"><p>Mitglied werden</p></a>

      <a class="mainlink" href="#"><p>Spenden</p></a>

      <a class="mainlink" href="#"><p>Newsletter</p></a>

      <a class="mainlink" href="#"><p>Bulletin</p></a>

      <a class="mainlink" href="#"><p>Facebook</p></a>


    </div>






  </main>





  <?php get_footer(); ?>
