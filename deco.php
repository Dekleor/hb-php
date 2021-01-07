<?php
session_start();
session_destroy();
include 'includes/header.php';


echo "
<p id='deco'> Vous avez été déconnecté avec succès !</p>";


include 'includes/footer.php';
?>