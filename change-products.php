<?php include("header.php");
include("connection.php");
include("database-products.php");

$id = $_GET['id'];
$product = searchProduct($connection, $id);
?>

<div style="margin-top: 100px;"> 
<h1>Alterar produto</h1>
<form action="changed-products.php" method="post">
    <table class="table">
        <input type="hidden" name="id" value="<?=$product['id']?>" />
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="name" value="<?=$product['name']?>"></td>
        </tr>
        <tr>
            <td>Sub</td>
            <td><input class="form-control" type="text" name="subname" value="<?=$product['subname']?>" ></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="price" value="<?=$product['price']?>" ></td>
        </tr>
        <tr>
            <td>Link imagem</td>
            <td><input class="form-control" type="text" name="imageLink" value="<?=$product['imageLink']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="" type="file" name="imageFile">
            <p class="help-block">Inpute uma imagem de seu computador caso prefira.</p>
        </td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="description"><?=$product['description']?></textarea></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td> 
        </tr>
    </table>
    
</form>
</div>

<?php include("footer.php");?>