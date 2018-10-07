<?php
    include_once 'header.php';
?>
<div style="text-align:center;">
  <h2><br>How to place an order on Green Life</br></h2>
    <!---------- xxxxxxxx ------->
    <h2>Animated Collapsibles</h2>
<button class="collapsible">Make sure you have registered</button>
<div class="content">
  <p>You can click on the button that says register near the top right corner. You will be required to fill a registration form, and then you'll be registered.</p>
</div>
<button class="collapsible">Find your products</button>
<div class="content">
  <p>If your product does not appear on the home page, you proceed to search for it click on the search button.</p>
</div>
<button class="collapsible">Click on 'Checkout</button>
<div class="content">
  <p>When you certain that you you purchase everything you see in your cart, please click on the checkout button to complete your order.</p>
</div>
<button class="collapsible">Enter a valid address</button>
  <div class="content">
    <p>To make sure your orders reaches you, please be careful when entering your address to avoid unnecessary delays and loss of product(s)</p>
</div>
<button class="collapsible">Proceed to making a payment</button>
  <div class=content>
    <p>On the next page you will be given several options of making payment.</p>
</div>
<h2>Delivery Matters</h2>
<button class="collapsible">How long will it take to receive your order(s)?</button>
  <div class="content">
    <p>It depends on the availablity of the stock in our warehouses.</p>
  </div>
<button class="collapsible">The cost of delivery</button>
  <div class="content">
    <p>For orders above R150, the delivery cost will be free. If you anything below that price, you will be charged R35.</p>
  </div>
<button class="collapsible">Delivery options</button>
  <div class="content">
    <p>Irrespective of the delivery method you choose, we always take responsibility up to the point of delivery, i.e. if your parcel goes missing or the contents are damaged, we will replace the affected items at no cost to you.</p>
  </div>
<h3>Payment Information</h3>
  <button class="collapsible">Which payment options are accepted?</button>
    <div class="content">
      <p>Pay with credit card, EFT or bank deposit, voucher code, Mobicred, Visa and Masterpass</p>
    </div>
  <button class="collapsible">What happens if your payment does not reflect in your account information?</button>
    <div class="content">
      <p>We work tirelessly to ensure that your payment is secure and easily traceable, however, should anything happen cause technical problems with the payment we will take care of it. </p>
    </div>
  <button class="collapsible">Refunds</button>
    <div class="content">
      <p>If you are not satisfired with your order, you can get a full refund before 14 days of recieving the order.</p>
    </div>
<h4>Track your order(s)</h4>
  <button class="collapsible">What happens if your order doesn't reach you?</button>
    <div class="content">
      <p>Our courier services do an excellent. In the event where your order takes longer than expected to reach you, we will be supportive throughout the journey</p>
    </div>
  <button class="collapsible">What's the Waybill number you get when your order is finalised?</button>
    <div class="content">
      <p>As an added security feature, we want to minimise the chances of your order being lost or delayed. The waybill number allows you to track your order from the moment it's dispatched from our warehouse.</p>
    </div>
  <button class="collapsible">Insurance on your order(s) until it reaches</button>
    <div class="content">
      <p>Should your order reach you in a damaged state, we will refund you and send you a similar product for free.</p>
    </div>
  <!--The following Javascript script allows collapsibles to slide up and down*-->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<?php
    include_once 'footer.php';
?>