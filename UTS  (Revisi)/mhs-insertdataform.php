<?php
    if(isset($_POST['txNOM'])){
    include_once ("koneksidb.php");
    $nom =$_POST['txNOM'];
    $nama =$_POST['txNAMA'];
    $grade = $_POST["txGRADE"];
    $stock = $_POST["txSTOCK"];

    $sql = "INSERT INTO GUNDAM(NOMER,NAMA,GRADE,STOCK) Values('$nom','$nama','$grade','$stock');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert data gagal<br>";
    }
    }else{
    header("location : mhs-insertdata.php");
}

