<?php

$hostname = "localhost";
$bancodedados = "guanabara";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
    echo "Error connecting to: (".$mysqli->connect_errno . "): ".$mysqli->connect_errno;
}




?>