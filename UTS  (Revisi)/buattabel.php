<?php

include_once("koneksidb.php");
$sql = "CREATE TABLE GUNDAM(
    NOMER Varchar(4) PRIMARY KEY,
    NAMA Varchar(50),
    GRADE Varchar(2),
    STOCK INT(255)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}