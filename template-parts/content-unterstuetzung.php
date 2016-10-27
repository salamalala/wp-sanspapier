<?php /* Template Name: Unterstützung */


get_header();

?>

<div class="unterstuetzung">

  <div class="unterstuetzung-box online-box">

    <h3 class="unterstuetzung-title">Online-Spende (mit Postkonto, Visa oder Masterkarte möglich)</h3>

    <form method="post" action="https://e-payment.postfinance.ch/ncol/test/orderstandard_utf8.asp" id=form1 class="online-form" name=form1>

      <div>
        <input type="radio" name="online-spende" value="20" id="os20" class="online-spende">
        <label for="os20"> 20 Franken </label>
      </div>

      <div>
        <input type="radio" name="online-spende" value="50" id="os50" class="online-spende">
        <label for="os50"> 50 Franken </label>
      </div>

      <div>
        <input type="radio" name="online-spende" value="100" id="os100" class="online-spende">
        <label for="os100"> 100 Franken </label>
      </div>

      <div>
        <input type="radio" name="online-spende" value="200" id="os200" class="online-spende">
        <label for="os200"> 200 Franken </label>
      </div>

      <div>
        <!-- min is 1 and steps avoids floats -->
        <input type="number" value="" id="osopen" min="1" step="1" class="online-spende" placeholder="Spende in CHF">
      </div>

      <input type="hidden" name="PSPID" value="sanspapiersTEST">
      <input type="hidden" name="ORDERID" value="">
      <input type="hidden" name="AMOUNT" value="">
      <input type="hidden" name="CURRENCY" value="CHF">
      <input type="hidden" name="LANGUAGE" value="de_CH">
      <input type="hidden" name=" ACCEPTURL" value="http://sanspapiersbern.ch/">

      <input type="submit" value="Online Spenden" id="submit" name="submit">

      <p class="unterstuetzung-box__validation">
        Bitte fügen Sie einen Spendenbetrag ein.
      </p>

    </form>

  </div>

  <div class="unterstuetzung-box account-box">
    <h3>Kontoangaben</h3>

    <h4> PC 30-586 909-1 | IBAN CH4809000000305869091</h4>

    <p>Berner Beratungsstelle für Sans-Papiers <br> Eigerplatz 5 <br> 3007 Bern </p>
  </div>

  <div class="unterstuetzung-box">
    <?php echo do_shortcode( '[contact-form-7 id="140" title="Unterstützungsformular"]' ); ?>
  </div>

  <?php get_template_part( 'template-parts/content', 'page' ); ?>


</div>


<?php   get_footer();   ?>
