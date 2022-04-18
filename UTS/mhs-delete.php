<?php
    
    include_once("koneksidb.php");
    $nom = "G-07";
    $sql = "DELETE FROM GUNDAM WHERE nomer='$nom';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }