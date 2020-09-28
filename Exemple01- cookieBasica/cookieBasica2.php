<?php
// recuperem el valor de la cookie en una altra pàgina
if(isset($_COOKIE['nom'])) {
    echo 'El valor emmagatzemat a la cookie nom és : '.$_COOKIE['nom'];
}
?>