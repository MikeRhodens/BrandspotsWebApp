<div class="cta-button">
    <h3>Betaling</h3>
</div>
<div class="payment-main">

    <form action="?action=paymentdone" method="post" class="form" id="paymentForm">
        <input type="text" value="" placeholder="Naam:" name="name">
        <input type="text" value="" placeholder="Straatnaam:" name="street">
        <input type="text" value="" placeholder="Postcode:" name="zipcode">
        <input type="text" value="" placeholder="Stad:" name="city">
        <input type="text" value="" placeholder="Telefoon:" name="cellphone">

    <!--end form-->
    <div class="title-payment">Kies betaalmethoden:</div>
    <!-- <div class="buttons">
        <div class="visa">
            <a href="#">Visa Card</a>
        </div>
        <div class="ideal">
            <a href="#">iDeal</a>
        </div>
        <div class="paypall">
            <a href="#">PayPall</a>
        </div>
    </div> -->
    <!-- end buttons-->
    <select name="paymentOptions" id="paymentOptions" form="paymentForm">
      <option value="visa">VISA</option>
      <option value="ideal">iDeal</option>
      <option value="paypal">PayPal</option>
    </select>
    <div class="cta-button">
        <input type="submit" value="Check out!">
    </div>
    </form>
</div>
