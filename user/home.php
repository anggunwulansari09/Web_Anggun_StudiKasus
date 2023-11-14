<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Doze Cafe</title>
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

        .gambar {
            width: 50px;
        }

        .judul {
            text-align: center;
            font-family: 'Gill Sans';
        }

        .h1_judul {
            font-weight: bold;
            font-size: 50px; 
            color: #7a1224
        }
    </style>
</head>

<body>
    <!-- navbar dan menu -->
    <!-- <nav class="navbar navbar-expand-lg bg-body-#ffd903;" style="background-color: #ffd903; height: 50px;">
        <div class="container-fluid">
            <img src="penjualan.png" alt="Logo" width="70" height="40" style="padding-top: 2px; ">
            <a class="navbar-brand" href="#" style="margin-left: 10px; font-family:Times New Roman;font-size: 25px;">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="http://localhost/Web_Anggun/admin/index.php" style="margin-left: 900px; font-family:Times New Roman; font-size: 20px;">Customer</a>
                    <a class="nav-link" href="about.php" style="font-family:Times New Roman; font-size: 20px;">Barang</a>
                    <a class="nav-link" href="product.php" style="font-family:Times New Roman; font-size: 20px;">Kategori</a>
                </div>
            </div>
        </div>
    </nav> -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="home.php"><img src="image/logo.png" class="gambar">Accessoris Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="coffees.html">Coffees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
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
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="banner_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner_img"><img src="image/mahkota1.png"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_taital_main">
                                        <h1 class="h1_judul">Accessoris Shop</h1>
                                        <h5 class="tasty_text">Selamat datang di Accessoris Shop </h5>
                                        <p class="banner_text">Toko kami terinspirasi dari mahkota karna mahkota sendiri merupakan lambang kekuasaan, legitimasi, keabadian, kejayaan, kemakmuran dan kehidupan </p>
                                        <div class="btn_main">
                                            <div class="about_bt"><a href="about.php" role="button">About Us</a></div>
                                            <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
        <!-- KATALOG -->
        <?php
        include "connection.php";
        $brg = mysqli_query($connection, "SELECT * FROM barang");
        ?>
        <div class="container mt-5">
            <div class="judul-katalog" style="background-color: white; padding:5px 10px">
                <h2 class="text-center" style="margin-top: 5px; margin-bottom: 20px; color:#CA1B6F"><b>KATALOG</b></h2>

                <div class="row">
                    <?php
                    while ($data = mysqli_fetch_array($brg)) {
                    ?>
                        <div class="col-md-4 col-sm-12 mb-5 ">
                            <div class="card" style="width: 15rem;">
                                <img src="../admin/<?php echo $data['gambar'] ?>" class="card-img-top" alt="">
                                <div class="card-body" style="background-color: #edd5d3">
                                    <h5 class="card-title" style="text-align: center;"><?php echo $data['nama_barang'] ?></h5>
                                    <p class="card-text">Rp. <?php echo $data['harga'] ?></p>
                                    <p class="card-title"><?php echo $data['stok'] ?></p>
                                    <p class="card-title"><?php echo $data['penilaian'] ?></p>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


</body>

</html>