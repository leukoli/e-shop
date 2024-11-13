<?php include("./include/header.inc.php")?>

<div class="container text-center" style="background: red; color:white; font-weight: bold;padding:20px;font-size:30px;">
  全部商品
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
        $sql = " SELECT * FROM goods ";
        $condition = "";
        if(isset($_GET['category_id']) && is_numeric($_GET['category_id'])){
          $condition = " WHERE (category2_id=:category_id OR category_id=:category_id) ";
        }
        if(isset($_GET['keyword']) && !empty($_GET['keyword'])){
          if($condition==""){
            $condition = " WHERE title like CONCAT('%', :keyword, '%') OR description like CONCAT('%', :keyword, '%') ";
          }else{
            $condition = " AND (title like CONCAT('%', :keyword, '%')OR description like CONCAT('%', :keyword, '%')) ";
          }
          
        }
        $stmt = $pdo->prepare($sql . $condition);

        if(isset($_GET['category_id']) && is_numeric($_GET['category_id'])){
          $stmt->bindParam(':category_id', $_GET['category_id']);
        }
        if(isset($_GET['keyword']) && !empty($_GET['keyword'])){
          $stmt->bindParam(':keyword', $_GET['keyword']);
        }

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