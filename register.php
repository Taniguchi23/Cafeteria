<?php
require 'database.php';

$name = $_POST['Name'];
$password= $_POST['Password'];
$insert = "INSERT INTO usuario (Nombre,Contra) VALUES ( '$name','$password')";
$query= mysqli_query($connect,$insert);
if ($query){
    echo "registrado!";
}else{
    echo "mal";
}
?>