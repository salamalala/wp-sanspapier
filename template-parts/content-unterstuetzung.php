<?php /* Template Name: Unterstützung */


get_header();

?>

<div class="unterstuetzung">

  <div class="unterstuetzung-box online">

    <h3>Online-Spende (mit Postkonto, Visa oder Masterkarte möglich)</h3>

    <form method="post" action="https://e-payment.postfinance.ch/ncol/prod/orderstandard_utf8.asp" id=form1 class="online-form" name=form1>

      <div class="online__donation">
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
      </div>

      <div class="online__address">
        <div>
          <label for="donater-name"> Name </label>
          <input type="text" name="online-spende" value="" id="donater-name" class="online-spende">
        </div>

        <div>
          <label for="donater-address"> Adresse </label>
          <input type="text" name="online-spende" value="" id="donater-address" class="online-spende">
        </div>

        <div>
          <label for="donater-zip"> Postleitzahl </label>
          <input type="text" name="online-spende" value="" id="donater-zip" class="online-spende">
        </div>

        <div>
          <label for="donater-town"> Ort </label>
          <input type="text" name="online-spende" value="" id="donater-town" class="online-spende">
        </div>

        <div>
          <label for="donater-email"> Email </label>
          <input type="email" name="online-spende" value="" id="donater-email" class="online-spende">
        </div>
      </div>

      <input type="hidden" name="PSPID" value="sanspapiers">
      <input type="hidden" name="ORDERID" value="">
      <input type="hidden" name="AMOUNT" value="">
      <input type="hidden" name="CURRENCY" value="CHF">
      <input type="hidden" name="LANGUAGE" value="de_CH">

      <input type="hidden" name="CN" value="">
      <input type="hidden" name="EMAIL" value="">
      <input type="hidden" name="OWNERZIP" value="">
      <input type="hidden" name="OWNERADDRESS" value="">
      <input type="hidden" name="OWNERTOWN" value="">

      <input type="hidden" name="ACCEPTURL" value="http://sanspapiersbern.ch/">
      <input type="hidden" name="SHASIGN" value="">

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
