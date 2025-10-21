<?php 
function dbconnect(){
$bdd = mysqli_connect('localhost', 'root','','loi_fi');
return $bdd;

}

?>