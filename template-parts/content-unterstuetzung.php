<?php /* Template Name: Unterstützung */


get_header();

?>

<div class="unterstuetzung">

  <?php get_template_part( 'template-parts/content', 'page' ); ?>

  <form method="post" action="https://e-payment.postfinance.ch/ncol/test/orderstandard_utf8.asp" id=form1 name=form1>

    <input type="radio" name="online-spende" value="20" id="b20" class="online-spende" checked>
    <label for="b20"> 20 Franken </label>
    <input type="radio" name="online-spende" value="50" id="b50" class="online-spende">
    <label for="b50"> 50 Franken </label>

    <input type="hidden" name="PSPID" value="sanspapiersTEST">

    <input type="hidden" name="ORDERID" value="">  <!-- Einfach eine Zufallszahl... -->
    <input type="hidden" name="AMOUNT" value="">

    <input type="hidden" name="CURRENCY" value="CHF">
    <input type="hidden" name="LANGUAGE" value="de_CH">
    <input type="hidden" name=" ACCEPTURL" value="http://sanspapiersbern.ch/">  <!-- Ich würde wohl nur zurückumleiten, wenn die Zahlung erfolgreich war -->

    <input type="submit" value="Spenden mit Postfinance" id="submit" name="submit">
  </form>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // End of the loop. ?>

</div>



<?php   get_footer();   ?>
