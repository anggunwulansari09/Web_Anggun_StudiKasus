<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM pelanggan");
$psn = mysqli_query($connection, "SELECT * FROM pesanan");
$brg = mysqli_query($connection, "SELECT * FROM barang");
$ktg = mysqli_query($connection, "SELECT * FROM kategori");
$dp = mysqli_query($connection, "SELECT * FROM detail_pesanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas menyambungkan database</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- link sendiri -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <style>
        .container {
            width: 800px;
            margin: auto;
        }

        .judul {
            margin-top: 50px;
            color: #0c2485;
        }
    </style>
    <!-- jquerry -->
    <!-- TB Pelanggan -->
    <script>
        $(document).ready(function() {
            $('#table-pelanggan').DataTable();
        });
    </script>
    <!-- TB Pesanan-->
    <script>
        $(document).ready(function() {
            $('#table-pesanan').DataTable();
        });
    </script>
    <!-- TB barang -->
    <script>
        $(document).ready(function() {
            $('#table-barang').DataTable();
        });
    </script>
    <!-- TB kategori -->
    <script>
        $(document).ready(function() {
            $('#table-kategori').DataTable();
        });
    </script>
    <!-- TB detail pesanan -->
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete_detail_pesanan.php?id=" + id;
            }
        }
    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-detail').DataTable();
        });
    </script>
</head>

<body >
    <div class="header_section">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <a class="navbar-brand" href="home.php" style=" font-weight: bold; color: white;"><img src="image/logo.png" style="width: 50px;" class="gambar">Accessoris Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Halaman Admin</a>
                        </li>
                        <form class="form-inline my-2 my-lg-0">
                            <div class="login_bt">
                                <ul>
                                    <li><a href="admin/index.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Admin</a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </form>
                </div>
            </nav>
        
        <!-- Tabel pelanggan -->
        <center>
            <h2 class="judul">DATA PELANGGAN</h2>
            <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
        </center>
        <p style="padding-left: 50px;"><a class="btn btn-primary btn-sm" href="tambah.php" role="button">Tambah Data </a> </p>
        <div style="width:1200px; margin:0 auto;">
            <table id="table-pelanggan" class="table table-striped-columns">
                <thead>
                    <tr>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama Customer</i></b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>Jenis Kelamin</i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Telpon </i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Alamat <br></i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>kota <br></i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Kode Pos<br></i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Email <br></i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Aksi<br></i></b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($query)) {
                    ?>
                        <?php
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['id']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $data['nama']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $data['jenis_kelamin']; ?></td>
                                <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['no_telp']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $data['alamat']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $data['kota']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $data['kode_pos']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $data['email']; ?></td>
                                <td align="center">
                                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?php echo $data['id']; ?>" onclick="alert('Apakah mau dihapus?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- pesanan -->
        <center>
            <h2 class="judul">DATA PESANAN</h2>
            <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
        </center>
        <p style="padding-left: 250px;"><a class="btn btn-primary btn-sm" href="tambah_pesanan.php" role="button">Tambah Data </a> </p>
        <div style="width:800px; margin:0 auto;">
            <table id="table-pesanan" class="table table-striped-columns">
                <thead>
                    <tr>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Tanggal_pesanan</i></b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> ID Pelanggan</i></b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Aksi</i></b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($psn)) {
                    ?>
                        <?php
                        while ($pesanan = mysqli_fetch_array($psn)) {
                        ?>
                            <tr>
                                <td style="background-color: #9ea6a7; text-align: center;"><?php echo $pesanan['id']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $pesanan['tanggal_pesanan']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $pesanan['pelanggan_id']; ?></td>
                                <td align="center">
                                    <a href="edit_pesanan.php?id=<?php echo $pesanan['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete_pesanan.php?id=<?php echo $pesanan['id']; ?>" onclick="alert('Apakah mau dihapus?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- barang -->
        <center>
            <h2 class="judul">DATA BARANG</h2>
            <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
        </center>
        <p style="padding-left: 155px;"><a class="btn btn-primary btn-sm" href="tambah_barang.php" role="button">Tambah Data </a> </p>
        <div style="width:1000px; margin:0 auto;">
            <table id="table-barang" class="table table-striped-columns">
                <thead>
                    <tr>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Gambar</i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama barang</i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Harga </i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Stok<br></i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Penilaian<br></i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>ID Kategori<br></i></b></td>
                        <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Aksi<br></i></b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($brg) > 0) {
                        $no = 1;
                    ?>
                        <?php
                        while ($barang = mysqli_fetch_array($brg)) {
                        ?>
                            <tr>
                                <td style="background-color: #9ea6a7; text-align: center;"><?php echo $barang['id']; ?></td>
                                <td style="background-color: #9ea6a7;"><img src="<?php echo $barang["gambar"]; ?>" width="100"></td>
                                <td style="background-color: #9ea6a7;"><?php echo $barang['nama_barang']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo "Rp" . number_format($barang['harga']); ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $barang['stok']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $barang['penilaian']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $barang['kategori_id']; ?></td>
                                <td align="center">
                                    <a href="edit_barang.php?id=<?php echo $barang['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete_barang.php?id=<?php echo $barang['id']; ?>" onclick="alert('Apakah mau dihapus?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- kategori -->
        <center>
            <h2 class="judul">DATA KATEGORI</h2>
            <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
        </center>
        <p style="padding-left: 250px;"><a class="btn btn-primary btn-sm" href="tambah_kategori.php" role="button">Tambah Data </a> </p>
        <div style="width:800px; margin:0 auto;">
            <table id="table-kategori" class="table table-striped-columns">
                <thead>
                    <tr>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama Kategori</i></b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Aksi</i></b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($ktg)) {
                    ?>
                        <?php
                        while ($kategori = mysqli_fetch_array($ktg)) {
                        ?>
                            <tr>
                                <td style="background-color: #9ea6a7; text-align: center;"><?php echo $kategori['id']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $kategori['nama_kategori']; ?></td>
                                <td align="center">
                                    <a href="edit_kategori.php?id=<?php echo $kategori['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete_kategori.php?id=<?php echo $kategori['id']; ?>" onclick="alert('Apakah mau dihapus?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- pesanan -->
        <center>
            <h2 class="judul">DETAIL PESANAN</h2>
            <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
        </center>
        <p style="padding-left: 250px;"><a class="btn btn-primary btn-sm" href="tambah_detail_pesanan.php" role="button">Tambah Data </a> </p>
        <div style="width:800px; margin:0 auto;">
            <table id="table-detail" class="table table-striped-columns">
                <thead>
                    <tr>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>Pesanan ID</i></b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Barang ID</b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Jumlah Barang<i></b></td>
                        <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Total Pesanan</i></b></td>
                        <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i> Aksi</i></b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($dp)) {
                    ?>
                        <?php
                        while ($detail_pesanan = mysqli_fetch_array($dp)) {
                        ?>
                            <tr>
                                <td style="background-color: #9ea6a7; text-align: center;"><?php echo $detail_pesanan['id']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $detail_pesanan['pesanan_id']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $detail_pesanan['barang_id']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo $detail_pesanan['jumlah_barang']; ?></td>
                                <td style="background-color: #9ea6a7;"><?php echo "Rp" . number_format($detail_pesanan['total_pesanan']); ?></td>
                                <td align="center">
                                    <a href="edit_detail_pesanan.php?id=<?php echo $detail_pesanan['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $detail_pesanan['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- footer -->
        <!-- footer section start -->
        <div class="footer_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="address_text">Address</h1>
                        <p class="footer_text">Kamu bisa menghubungi kontak di bawah ini jika ingin memesan dan info lebih lanjut terkait produk. </p>
                        <div class="location_text">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+6285234543212</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Accessoris_Shop.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                            <div class="subscribe_bt"><a href="#"><img src="images/teligram-icon.png"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <p class="copyright_text">2023 All Rights Reserved. Design by <a href="#">Anggun Wulan Sari</a></p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="footer_social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/anggun_wlsr/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>

</html>