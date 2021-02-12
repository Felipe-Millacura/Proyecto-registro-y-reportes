<?php

$conn = mysqli_connect('localhost','root','','minimarket');

if(mysqli_connect_errno()){
    echo "Error al cargar BDD: ".mysqli_connect_error();
}
?>