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
           Wir <a href="#">beraten und informieren MigrantInnen</a>, die in der Schweiz leben, ohne eine Aufenthalts&shybewilligung zu besitzen. Zudem leisten wir <a href="#">Sensibilisierungs- und Informationsarbeit</a> in der Region Bern.
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
            
              <a class="minorlink" href="#">Mehr Informationen</a>
            
            </div>


            <?php endwhile; ?>
          <?php endif; ?> 
             



    </div>
    <!-- End of Beratungsbox -->
    
    <div class="sidebar-links">
      <div class="mainlink">
        <a href="#">Mitglied werden</a>
      </div>

      <div class="mainlink">
        <a href="#">Spenden</a>   
      </div>

      <div class="mainlink">
        <a href="#">Bulletin</a>
      </div>

      <div class="mainlink newsletter">
        <p>Newsletter bestellen</p>

        <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="//sans-papiers.us6.list-manage.com/subscribe/post?u=515540207cb90d8a5faa83b5e&amp;id=471eca439c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
            
                <div class="mc-field-group">
                  <label class="italic" for="mce-EMAIL">E-Mail: </label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Emailadresse">
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_515540207cb90d8a5faa83b5e_471eca439c" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Anmelden" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              
              </div>
            </form>
          </div>
            <!--End mc_embed_signup-->
      </div>



    </div>

  </main>





  <?php get_footer(); ?>
