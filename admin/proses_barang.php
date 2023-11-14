<?php
include("connection.php");

$id= $_POST ['id'];
$nama_barang= $_POST ['nama_barang'];
$harga= $_POST ['harga'];
$stok=$_POST['stok'];
$penilaian=$_POST ['penilaian'];
$kategori_id=$_POST['kategori_id'];

// Upload Proses
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($connection, "INSERT INTO `barang` (`nama_barang`,`harga`,`stok`,`penilaian`,`kategori_id`,`gambar`)
 VALUES ('$nama_barang','$harga','$stok','$penilaian','$kategori_id','$target_file');");
header("Location:index.php");



