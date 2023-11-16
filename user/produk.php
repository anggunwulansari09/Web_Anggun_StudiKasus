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
    <title>toko aksesoris</title>
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
        <!-- header section end -->
        <!-- coffee section start -->
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
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.15,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pbando.jpg"></div>
                                        <h3 class="types_text">Bando</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.29,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pjepit.jpg"></div>
                                        <h3 class="types_text">Jepit rambut</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.15,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/ptas.jpg"></div>
                                        <h3 class="types_text">Tas</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.90,000</p>
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
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.15,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/topi1.jpg"></div>
                                        <h3 class="types_text">Topi</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.29,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/ptas.jpg"></div>
                                        <h3 class="types_text">Tas</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.90,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pbando.jpg"></div>
                                        <h3 class="types_text">Bando</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.20,000</p>
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
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.20,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/ptas.jpg"></div>
                                        <h3 class="types_text">Tas</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.90,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/pbando.jpg"></div>
                                        <h3 class="types_text">Bando</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.29,000</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img"><img src="image/topi1.jpg"></div>
                                        <h3 class="types_text">Topi</h3>
                                        <p class="looking_text"><b>look at this, it's so beautiful</b></p>
                                        <p class="looking_text">Rp.100,000</p>
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
        <!-- coffee section end -->
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