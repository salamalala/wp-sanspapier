<?php /* Template Name: Unterstützung */


get_header();

?>

<div class="unterstuetzung">

  <?php get_template_part( 'template-parts/content', 'page' ); ?>

  <h3>Online-Spende (mit Postkonto, Visa oder Masterkarte möglich)</h3>

  <form method="post" action="https://e-payment.postfinance.ch/ncol/test/orderstandard_utf8.asp" id=form1 name=form1>

    <input type="radio" name="online-spende" value="20" id="os20" class="online-spende">
    <label for="os20"> 20 Franken </label>
    <input type="radio" name="online-spende" value="50" id="os50" class="online-spende">
    <label for="os50"> 50 Franken </label>
    <input type="radio" name="online-spende" value="100" id="os100" class="online-spende">
    <label for="os100"> 100 Franken </label>
    <input type="radio" name="online-spende" value="200" id="os200" class="online-spende">
    <label for="os200"> 200 Franken </label>
    <!-- min is 1 and steps avoids floats -->
    <input type="number" value="" id="osopen" min="1" step="1" class="online-spende">
    <label for="osopen"> Franken </label>

    <input type="hidden" name="PSPID" value="sanspapiersTEST">
    <input type="hidden" name="ORDERID" value="">
    <input type="hidden" name="AMOUNT" value="">
    <input type="hidden" name="CURRENCY" value="CHF">
    <input type="hidden" name="LANGUAGE" value="de_CH">
    <input type="hidden" name=" ACCEPTURL" value="http://sanspapiersbern.ch/">

    <input type="submit" value="Spenden mit Postfinance" id="submit" name="submit">

  </form>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // End of the loop. ?>

</div>


<?php   get_footer();   ?>
