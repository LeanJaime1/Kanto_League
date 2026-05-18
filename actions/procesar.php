<?php
session_start();

$nombre = $_POST['entrenador'];
$region = $_POST['ciudad'];


$_SESSION['entrenador'] = $nombre;
$_SESSION['ciudad'] = $region;


header("Location: ../index.php?view=pelea");
