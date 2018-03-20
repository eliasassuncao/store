<?php include("header.php");
include("connection.php");
include("database-products.php");
include("logic-user.php");

verifyUser();

?>

<div style="margin-top: 100px;"> 
<h1>Adicionar produto</h1>
<form action="add-products.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="name"></td>
        </tr>
        <tr>
            <td>Sub</td>
            <td><input class="form-control" type="text" name="subname"></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="price"></td>
        </tr>
        <tr>
            <td>Link imagem</td>
            <td><input class="form-control" type="text" name="imageLink"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="" type="file" name="imageFile">
            <p class="help-block">Inpute uma imagem de seu computador caso prefira.</p>
        </td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="description"></textarea></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td> 
        </tr>
    </table>
    
</form>
<form>

<?php
    if(array_key_exists("remove", $_GET) && $_GET["remove"]=="true") {
?>
    <p class="text-success">PRODUTO REMOVIDO COM SUCESSO!</p>
<?php
    }
?>

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