<?php
  include("./include/header.inc.php");
  
  if(!isset($_SESSION['cart'])){
    $_SESSION['carts'] = [1=>3, 3=>4];
  }

  // 購物車session 操作
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['count'])) {
    if($_POST['count'] <= 0) {
      unset($_SESSION['carts'][$_POST['id']]);
    } else {
      $_SESSION['carts'][$_POST['id']] = $_POST['count'];
    }
  }

  $ids = [];
  foreach ($_SESSION['carts'] as $id => $count) {
    $ids[] = $id;
  }

  $cartGoods = null;
  if(count($ids)>0) {
    $stmt = $pdo->prepare("SELECT * FROM goods WHERE id IN (" . implode(',', $ids) . ")");
    $stmt->execute();
    $cartGoods = $stmt->fetchAll();
  }
  ?>


<div class="container text-center cart" >
  
  <table style="width: 80%; margin: 30px auto;" cellpadding="15">
    <tr>
      <td colspan="5" style="font-weight: bold;font-size:20px; text-align: left; background: #eee;padding: 0 10px;">購物車</td>
    </tr>

    <tr>
      <td>商品資料</td>
      <td>單件價格</td>
      <td>數量</td>
      <td>小計</td>
      <td></td>
    </tr>

    <?php
    if(!empty($cartGoods)):
      foreach ($cartGoods as $key => $goods):
    ?>
      <tr>
        <td style="text-align: left;"><img src="<?=$goods['thumbnail']?>" width="80" style="float: left;"> <?=$goods['title']?></td>
        <td>
          <?php
          $price = 0;
            if($goods['discount_price'] <=0){
              echo 'HK$'.$goods['price'];
              $price = $goods['price'] * $_SESSION['carts'][$goods['id']];
            }else{
              echo 'HK$'.$goods['discount_price'];
              echo '<br>';
              echo "<span style='text-decoration: line-through; color:#888;'>HK\${$goods['price']}</span>";
              $price = $goods['discount_price'] * $_SESSION['carts'][$goods['id']];
            }
          ?>
        </td>
        <td><input type="number" style="width: 80px;" value="<?=$_SESSION['carts'][$goods['id']]?>"></td>
        <td>HK$<?=$price?></td>
        <td>
          <form method="POST">
            <input type="hidden" name="id" value="<?=$goods['id']?>">
            <input type="hidden" name="count" value="0">
            <input type="submit" value="DEL">
          </form>
        </td>
      </tr>
    <?php endforeach;?>
      <tr>
        <td colspan="5"><input type="button" value="提交訂單" onclick="location.href='<?=SITE_ROOT?>thanks.php';"></td>
      </tr>
    <?php else :?>
    <tr><td colspan="5" style="padding: 20px;">您還未選擇商品！</td></tr>
    <?php endif; ?>
  </table>

</div>





<?php include("./include/footer.inc.php")?>














