<?php
// cridar primer a sessiobasica.php
session_start();
if(isset($_SESSION['nom'])) echo $_SESSION['nom'];
?>
