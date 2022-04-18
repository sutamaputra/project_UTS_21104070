<?php

    include_once("koneksidb.php");
    $nom = "G-08";
    $gantigrade = "HG";
    $sql = "UPDATE GUNDAM SET GRADE='$gantigrade' WHERE nomer='$nom';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }