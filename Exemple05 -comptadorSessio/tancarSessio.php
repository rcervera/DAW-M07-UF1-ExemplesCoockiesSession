<?php
session_start();
session_unset(); // Esborrar variables de sessió
session_destroy(); // esborrar identificador de sessió
header('Location: comptador.php');
?>
