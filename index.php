<?php require_once("header.php");
require_once("logic-user.php");
?>

<?php 
    showAlert("success");
    showAlert("danger");
?>

<div class="container" style="margin-top: 70px;">
    <h1 class="text-center">Bem vindo!</h1>
<?php if(userIsLogged()) { ?>
    <p class="alert-success text-center">Você está logado como <?= userLogged() ?>. </p>    
<?php } else {?>

    <h2 class="text-center">Login</h2>
    <form action="login.php" method="post">
    <table class="table">
        <tr>    
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="passwordUser"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Login</button></td>
        </tr>
    </table>
    </form>
<?php } ?>
</div>

<?php include("footer.php")?>