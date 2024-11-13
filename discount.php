<?php include("./include/header.inc.php")?>

<div class="container text-center" style="background: red; color:white; font-weight: bold;padding:20px;font-size:30px;">
  特價專區 Special Offers
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-3">
      <?php
      include("include/category.inc.php");
      ?>
    </div>
    <div class="col-9">
      <div class="container text-center">
      <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        <?php

          $stmt = $pdo->prepare("SELECT * FROM goods WHERE discount_price>=0 limit 15");
            $stmt->execute();
        $specialOffers = $stmt->fetchAll();
            foreach($specialOffers as $key => $arr):
        ?>
        <div class="col">
          <div class="p-3">
             <a href="detail.php?id=<?=$arr['id']?>">
              <img src="<?=$arr['thumbnail']?>" class="img-thumbnail" alt="<?=$arr['title']?>">
            </a>
          </div>
        </div>
        <?php
          endforeach;
        ?>
      </div>
    </div>
    </div>
  </div>
</div>





<?php include("./include/footer.inc.php")?>