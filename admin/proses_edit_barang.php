<?php
include("connection.php");

$id= $_GET ['id'];
$gambar= $_POST ['gambar'];
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

$result = mysqli_query($connection, "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga', stok ='$stok', penilaian = '$penilaian', kategori_id = '$kategori_id', gambar = '$target_file' WHERE id = '$id'; ");

header("Location:index.php");


