 <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
        <nav class="nav nav-pills flex-column">
        	<?php
				$stmt = $pdo->prepare("SELECT * FROM goods_category where parent_id=0");
				$stmt->execute();
				$parentCategories = $stmt->fetchAll();
				foreach ($parentCategories as $key => $parentCategory):
        	?>
	          <a class="nav-link" href="goods.php?category_id=<?=$parentCategory['id']?>"><?=$parentCategory['title']?></a>
	          <nav class="nav nav-pills flex-column">
	          	<?php
					$stmt2 = $pdo->prepare("SELECT * FROM goods_category where parent_id=:parent_id");
					$stmt2->bindParam(':parent_id', $parentCategory['id']);
					$stmt2->execute();
					$parentCategories = $stmt2->fetchAll();
					foreach ($parentCategories as $key => $subCategory):
	        	?>
	            <a class="nav-link ms-3 my-1" href="goods.php?category_id=<?=$subCategory['id']?>"><?=$subCategory['title']?></a>
	            <?php endforeach;?>
	          </nav>
      		<?php endforeach;?>
        </nav>
      </nav>