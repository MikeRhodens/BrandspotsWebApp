<div class="cta-button">
    <h3>Betaling</h3>
</div>

<div class="payment-done">
  <h3>Bedankt voor uw bestelling! <br> Zie hier een overzicht:</h3>




  <p>
    Naam:        <b><?php echo $name; ?><br></b>
    Straatnaam:  <b><?php echo $street; ?><br></b>
    Postcode:    <b><?php echo $zipcode; ?><br></b>
    Stad:        <b><?php echo $city; ?><br></b>
    Telefoon:    <b><?php echo $cellphone; ?><br></b>
    Betingsmethode: <b><?php echo $paymentOptions; ?><br></b>
  </p>

</div>
  <a href="?action=overzicht">
    <button id="goBackButton">Terug naar het overzicht</button>
  </a>
