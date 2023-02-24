<?php
function conn(){
$server = "localhots";
$user = "daltonEnriquez";
$pass = "w1234";
$db = "waytapata";
$conectar = mysqli_connect($server,$user,$pass,$db);

return $conectar;
}
?>