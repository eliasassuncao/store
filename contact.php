<?php require_once("header.php"); 

showAlert("success");
showAlert("danger");
?>

<form action="submit-contact.php" method="post" style="margin-top:150px;">
    <h1 class="text-center">Contato</h1>
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="name" class="form-control" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" class="form-control" required></td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><textarea class="form-control" name="message"></textarea></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Enviar</button></td>
        </tr>
    </table>
</form>

<?php require_once("footer.php"); ?>