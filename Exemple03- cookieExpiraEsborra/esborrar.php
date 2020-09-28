<?php
// Posar la data d'expiració en el passat!
setcookie("usuari", "esborra..", time() - 3600,"/");
?>
<html>
<body>

<?php
echo "Cookie 'usuari' esborrada.";
?>

</body>
</html>