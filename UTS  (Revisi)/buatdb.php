<?php
include_once("koneksidb.php");
$sql = "CREATE DATABASE TEKKADAN_SHOP;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan database sukses";
}else{
    echo "Pembuatan database bermasalah";
}
mysqli_close($cnn);