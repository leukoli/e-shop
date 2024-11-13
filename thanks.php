<?php
  include("./include/header.inc.php");
  unset($_SESSION['carts']);
?>


<div class="container text-center">
  <div style="width: 500px;margin: 0 auto;">
      <h1>Thanks for your order.</h1>
      <p>We will notify you when the product is shipped.</p>
      <p>Order number: <span style="color: blue;">W<?=random_int(1000000000, 9999999999)?></span></p>
      <p>Order date: <i><?=date("d/n/Y")?></i></p>
  </div>
</div>





<?php include("./include/footer.inc.php")?>