<?php require_once("header.php");
require_once("database-products.php");
require_once("logic-user.php");
verifyUser();

$product = array("name" => "", "subname" => "", "price" => "", "imageLink" => "", "description" => "", "imageFile" => "");
?>

<div style="margin-top: 100px;"> 
<h1>Adicionar produto</h1>
<form action="add-products.php" method="post">
    <table class="table">
        
        <?php include("form-base.php"); ?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td> 
        </tr>
    </table>
    
</form>

<?php showAlert("success"); ?>

<form>
<table class="table table-striped table-bordered" style="box-shadow: 2px 2px 15px">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sub</th>
            <th>Preço</th>
            <th>ImagemLink</th>
            <th>Descrição</th>
            <th>ImagemFile</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $products = listProducts($connection);
            foreach($products as $product):
        ?>  
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['subname'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= substr($product['imageLink'], 0 , 50) ?></td>
            <td><?= substr($product['description'], 0, 50) ?></td>
            <td><?= $product['imageFile'] ?></td>
            <td><a href="change-products.php?id=<?=$product['id']?>" class="btn btn-primary glyphicon glyphicon-pencil"></a></td>
            <td>
                <form action="del-products.php" method="post">
                <input type="hidden" name="id" value="<?=$product['id']?>"/>
                    <button class="btn btn-danger glyphicon glyphicon-trash"></button>
                </form>
            </td>
        </tr>
        <?php
            endforeach
        ?>
    </tbody>
</table>
</form>
</div>




<?php include("footer.php");?>