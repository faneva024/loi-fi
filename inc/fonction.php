<?php
require('connexion.php');

    function get_tab($nom_tab){
        $bdd=dbconnect();
        $sql="SELECT * FROM %s";
        $sql=sprintf($sql,$nom_tab);
        $res=mysqli_query($bdd,$sql);
        return $res;
    }
            

?>