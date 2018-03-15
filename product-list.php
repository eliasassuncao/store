<?php include("header.php");
include("connection.php");
include("database-products.php");?>

<div class="container" style="margin-top: 100px;">
    <?php
        $products = listProducts($connection);
        foreach($products as $product):
    ?> 
    <div class="col-lg-4 text-center" style="height: 400px; padding: 20px;">
    <?php 
        if(strlen($product['imageLink'])) { 
    ?>
        <img class="img-circle" style="height: 200px; " src="<?= $product['imageLink']?>" alt="">
    <?php } else { ?>
        <img class="img-circle" style="height: 200px; " src="<?= $product['imageFile']?>" alt="">
    <?php } ?>
          <h3><?= $product['name']?>
            <small><?= $product['subname']?></small>
          </h3>
          <h4>Preço: <?= $product['price']?>
          <p><?= $product['description']?></p>
          <button class="btn btn-primary">Comprar</button>
    </div>
        <?php
        endforeach
    ?>
</div>