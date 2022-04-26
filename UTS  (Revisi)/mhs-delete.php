<?php
    if(isset($_POST['txNOM'])){
    include_once("koneksidb.php");
    $nom =$_POST['txNOM'];

    $sql = "DELETE FROM GUNDAM WHERE nomer='$nom';";
    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "delete data sukses<br>";
    }else{
        echo "delete data gagal";
    }
    }else{
    header("location : mhs-insertdata.php");
}
    