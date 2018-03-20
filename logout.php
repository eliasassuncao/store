<?php include("logic-user.php");
logout();
header("Location: index.php?logout=1");
die();