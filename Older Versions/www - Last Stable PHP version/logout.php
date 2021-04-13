<?php
session_start();
session_destroy();
header("Location:index.php");
echo '<div class="alert alert-success" role="alert">Logout Successfull</div>';

?>