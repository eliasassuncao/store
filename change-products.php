<?php require_once("header.php");
require_once("database-products.php");

$id = $_GET['id'];
$product = searchProduct($connection, $id);
?>

<div style="margin-top: 100px;"> 
<h1>Alterar produto</h1>
<form action="changed-products.php" method="post">
    <table class="table">
        <input type="hidden" name="id" value="<?=$product['id']?>" />
        
            <?php include("form-base.php"); ?>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td> 
        </tr>
    </table>
    
</form>
</div>

<?php include("footer.php");?>