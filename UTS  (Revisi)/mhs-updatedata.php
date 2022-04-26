<?php
    if(isset($_POST['txNOM'])){
    include_once("koneksidb.php");
    $nom =$_POST['txNOM'];
    $nama =$_POST['txNAMAup'];
    $grade = $_POST["txGRADEup"];
    $stock = $_POST["txSTOCKup"];
    
    $sql = "UPDATE GUNDAM SET nama='$nama',grade='$grade',stock='$stock' WHERE nomer='$nom';";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "update data sukses<br>";
    }else{
        echo "update data gagal<br>";
    }
    }else{
    header("location : mhs-insertdata.php");
}