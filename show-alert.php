<?php 
    function showAlert($type) {
        if(isset($_SESSION[$type])) {
?>
    <p class="alert-<?= $type ?> text-center" style="margin-top:100px;"><?= $_SESSION[$type] ?></p>
<?php
        unset($_SESSION[$type]);
    }
}
?>