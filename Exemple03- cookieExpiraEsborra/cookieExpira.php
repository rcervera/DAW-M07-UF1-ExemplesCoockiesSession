<?php
$cookie_name = "usuari";
$cookie_value = "Josep Ponts";
setcookie($cookie_name, $cookie_value, time() + (60*60*24 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie '" . $cookie_name . "' no existeix";
} else {
  echo "Cookie '" . $cookie_name . "' existeix<br>";
  echo "i el seu valor és: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
