<?php   

session_start(); 
if(!isset($_SESSION['comptador'])) 
{
   $_SESSION['comptador'] = 0; 
}
$_SESSION['comptador']++;
echo $_SESSION['comptador'];
echo "<br>Recarrega la pàgina...";


?>
<br>
<a href='tancarSessio.php'>Tancar Sessió</a>
