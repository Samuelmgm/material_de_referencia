<?php
$link = mysqli_connect('localhost', 'root', '') 
or die('Could not connect: ' . mysqli_error());
mysqli_select_db($link, 'minha_estacio') or die('Could not select database');

?>