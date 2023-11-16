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
    <title>Toko aksesoris</title>
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

        .sesi {
            padding-left: 200px;
        }
    </style>
</head>

<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <a class="navbar-brand" href="home.php" style=" font-weight: bold; color: white;"><img src="image/logo.png" class="gambar">Accessoris Shop</a>
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
                            <a class="nav-link" href="produk.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
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
                                    <div class="banner_img"><img src=""></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_taital_main">
                                        <h1 class="h1_judul">Accessoris Shop</h1>
                                        <h5 class="tasty_text">Selamat datang di Accessoris Shop </h5>
                                        <p class="banner_text">Toko kami terinspirasi dari mahkota karna mahkota sendiri merupakan lambang kekuasaan, legitimasi, keabadian, kejayaan, kemakmuran dan kehidupan </p>
                                        <div class="btn_main">
                                            <div class="about_bt"><a href="about.php" role="button">About Us</a></div>
                                            <div class="callnow_bt active"><a href="contact.php">Call Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
        <!-- product section start -->
        <div class="coffee_section layout_padding">
            <div class="container">
                <div class="row">
                    <h1 class="coffee_taital">OUR Product OFFER</h1>
                    <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
                </div>
            </div>
            <div class="coffee_section_2">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pjepit.jpg"></div>
                                        <h3 class="types_text">Jepit Rambut</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pbando.jpg"></div>
                                        <h3 class="types_text">Bando</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pjepit.jpg"></div>
                                        <h3 class="types_text">Jepit rambut</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/ptas.jpg"></div>
                                        <h3 class="types_text">Tas</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pikat.jpg"></div>
                                        <h3 class="types_text">Ikat Rambut</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/topi1.jpg"></div>
                                        <h3 class="types_text">Topi</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/ptas.jpg"></div>
                                        <h3 class="types_text">Tas</h3>
                                        <p class="looking_text">llook at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pbando.jpg"></div>
                                        <h3 class="types_text">Bando</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pjepit.jpg"></div>
                                        <h3 class="types_text">Jepit Rambut</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/ptas.jpg"></div>
                                        <h3 class="types_text">Tas</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pbando.jpg"></div>
                                        <h3 class="types_text">Bando</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/topi1.jpg"></div>
                                        <h3 class="types_text">Topi</h3>
                                        <p class="looking_text">look at this, it's so beautiful</p>
                                        <div class="read_bt"><a href="produk.php">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- prosuct section end -->
        <!-- KATALOG dari database-->
        <?php
        include "connection.php";
        $brg = mysqli_query($connection, "SELECT * FROM barang");
        ?>
        <div align="center">
            <div class="judul-katalog" style="padding:50px 300px;">
                <h1 class="coffee_taital" style="padding-top: 100px;">KATALOG </h1>
                <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
                <div style="padding-top: 20px;"></div>
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
    </div>
    <!-- end katalog -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="about_taital">About Our shop</h1>
                    <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
                </div>
            </div>
            <div class="about_section_2 layout_padding">
                <!-- <div><img src="image/banner1.jpg"class="sesi"></div> -->
                <!-- <div class="about_taital_box"> -->
                <!-- card -->
                <div class="card mb-3 mx-auto" style="max-width: 540px; background-color: #c27465;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="image/anggun1.jpeg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-center"> <!-- Tambahkan kelas text-center di sini -->
                                <h5 class="card-title">Profile Owner</h5>
                                <p class="card-text">
                                <ul class="list-group">
                                    <li class="list-group-item">Nama : Anggun Wulan Sari</li>
                                    <li class="list-group-item">Kelas : Full Stack Web Development</li>
                                    <li class="list-group-item">Univ : Politeknik Negeri Sriwijaya</li>
                                </ul>
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> <!-- Ganti text-body-secondary menjadi text-muted -->
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="about_taital_1">Accessoris Shop </h1>
                <p class=" about_text">Toko kami terinspirasi dari mahkota karna mahkota sendiri merupakan lambang kekuasaan, legitimasi, keabadian, kejayaan, kemakmuran dan kehidupan.Kami hadir untuk penawaran yang lebih besar. Khusus hari ini, dapatkan promo cashback Rp50 ribu untuk setiap pembelian produk seharga minimal Rp300 ribu.</p>
            </div>
        </div>
    </div>
    </div>
    <!-- about section end -->
    <!-- blog section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="about_taital">Our Blog</h1>
                <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
        </div>
        <div class="blog_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog_box">
                        <div class="blog_img"><img src="image/blog1.jpg"></div>
                        <h4 class="date_text">14 November 2023</h4>
                        <h4 class="prep_text">Sejarah Toko</h4>
                        <p class="lorem_text">Toko ini berdiri pada tanggal 11 November 2023, dengan didirikan oleh mahasiswi dengan motivasi agar bisa membuka usaha sendiri.
                            toko ini menyediakan banyak aksesoris keperluan agar kita bisa terlihat anggun dan indah .</p>
                    </div>
                    <div class="read_bt"><a href="about.php">Read More</a></div>
                </div>
                <div class="col-md-6">
                    <div class="blog_box">
                        <div class="blog_img"><img src="image/blog2.jpg"></div>
                        <h4 class="date_text">14 November 2023</h4>
                        <h4 class="prep_text">Informasi Toko</h4>
                        <p class="lorem_text">Jika Kamu ingin berkonsultasi terlebih dahulu teruntu aksesoris mana yang cocok maka kamu bisa berkonsultasi dengan saya melalui nomor yang tertera pada menu contact ya...ayo di cek kembali produknya sebelum kehabisan</p>
                    </div>
                    <div class="read_bt"><a href="about.php">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- blog section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Get In Touch</h1>
                    <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                            <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                            <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>



</body>

</html>