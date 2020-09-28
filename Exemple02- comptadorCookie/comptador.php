<?php
  
  if(isset($_COOKIE['comptador']))
  { 
    // Caduca en un any
    setcookie('comptador', $_COOKIE['comptador'] + 1, time() + 365 * 24 * 60 * 60); 
    $missatge = 'Número de visites: ' . $_COOKIE['comptador']; 
  } 
  else 
  { 
    // Caduca en un any
    setcookie('comptador', 1, time() + 365 * 24 * 60 * 60); 
    $missatge = 'Benvingut! '; 
  } 
?> 

 
<html> 
<head> 
<title>Prova de cookie</title> 
</head> 
<body> 
<p> 
<?php echo $missatge; ?> 
</p> 
</body> 
</html> 
