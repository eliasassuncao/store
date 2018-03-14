<?php include("header.php");
include("connection.php");
include("database-products.php");

?>

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
            <td><input class="form-control" type="text" name="image"></td>
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

<?php include("footer.php");?>