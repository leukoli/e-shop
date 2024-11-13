<?php include("./include/header.inc.php")?>


<div id="carouselExampleIndicators" class="carousel slide" style="margin:80px auto 0 auto;width: 70%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://shoplineimg.com/621729e6ee0d440013c7df40/65324d459a853a0014a3e910/2160x.webp?source_format=jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://shoplineimg.com/621729e6ee0d440013c7df40/66ed627d5dcd3e0013a17ba5/2160x.webp?source_format=png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://shoplineimg.com/621729e6ee0d440013c7df40/662e40ab7af0460023bbbf9e/2160x.webp?source_format=jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container text-center">
	<h1 style="margin-top:30px;">特價專區 Special Offers</h1>
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
  	<?php

    $stmt = $pdo->prepare("SELECT * FROM goods WHERE discount_price>0 limit 15");
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



<div class="container text-center">
	<h1 style="margin-top:30px;">推薦商品</h1>
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php
    // $stmt = $pdo->prepare("SELECT * FROM goods WHERE recommend=1 limit 15");
    ?>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/66543f20368c28001028b7c9/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fef0d1cefe0032ad55a5/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."> </div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fe6f0e4e51002c00374b/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/66543f20368c28001028b7c9/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fef0d1cefe0032ad55a5/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."> </div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fe6f0e4e51002c00374b/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/66543f20368c28001028b7c9/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fef0d1cefe0032ad55a5/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."> </div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fe6f0e4e51002c00374b/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/66543f20368c28001028b7c9/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fef0d1cefe0032ad55a5/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."> </div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fe6f0e4e51002c00374b/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/66543f20368c28001028b7c9/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fef0d1cefe0032ad55a5/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."> </div>
    </div>
    <div class="col">
      <div class="p-3"><img src="https://shoplineimg.com/621729e6ee0d440013c7df40/62e0fe6f0e4e51002c00374b/720x.webp?source_format=jpg" class="img-thumbnail" alt="..."></div>
    </div>
  </div>
</div>


<?php include("./include/footer.inc.php")?>