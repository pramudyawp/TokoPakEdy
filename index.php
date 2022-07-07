<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PakEdy Cafe & Resto</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.php">
                            <img src="logo.png" width="160" height="36" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <a style="width: 100px;" class="header-btn nav-link menu active text-dark" id="menuHome" href="index.php">Home</a>
                        <a style="width: 80px;" href="#menu" class="header-btn text-dark">Menu</a>
                        <a style="width: 140px;" href="datatable.php" class="header-btn text-dark">Datatable</a>
                        <div class="header-right">
                            <a style="width: 80px;" id="menuCart" href="javascript:void(0)" class="header-btn nav-link menu">
                                <i class="uil uil-shopping-bag"><br></i>
                                <span id="countCart"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/berry.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Selamat datang di
                                        <span>PakEdy</span>
                                        Cafe and Resto
                                    </h1>
                                    <p>Kami menyediakan berbagai makanan untuk anda nikmati bersama keluarga
                                        Silahkan datang di Jalan Sukarno Hatta Nomor 172, Sumbersari, Jember.</p>
                                    <div class="banner-btn mt-4">
                                        <a href="#menu" class="sec-btn">Cek Menu Kami</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url(assets/images/main-b.jpg);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">menu kami</p>
                                    <h2 class="h2-title">silahkan dipesan <span>dijamin segar & sehat</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="menu-list-row">
                            <div class="my-5" id="content"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Reservasi Kami</p>
                                    <h2 class="h2-title">Jam Buka</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Reguler</h3>
                                        <h3>Senin - Jumat</h3>
                                        <p>09:00 pagi - 10.00 malam</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+62 812 612 372 900">+62 812 612 372 900</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>VVIP</h3>
                                        <h3>Jumat - Minggu</h3>
                                        <p>06:00 malam - 11.59 malam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>

            </section>

            <section class="our-team section">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Anggota</p>
                                    <h2 class="h2-title">Kelas SI B <span> Kelompok 16</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row team-slider">
                            <div class="swiper-wrapper">
                               <!-- AZKIYA -->
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/azkiya.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Azkiya Fadiyah Ammar</h3>
                                        <p>NIM 202410101013</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/putri.afa.33"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/azkiya_azk/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UCbMSYKCUkOaHPZjsZbVOE8w">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- RISYA -->
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/risya.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Risya Mauriza</h3>
                                        <p>NIM 202410101031</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/profile.php?id=100004315122249"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/risyamauriza/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UCeOdc3Ww3p64Dr7SdKEHmPg">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- RIDA -->
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/rida.png);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Ridayanti Yoviandri</h3>
                                        <p>NIM 202410101082</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/andri.ridayanti/"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/andriridayanti/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UCa2Ggd61KGj_IlSQdUfNoJw">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- PRAMUDYA -->
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/pram.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Pramudya Widi Pradipta</h3>
                                        <p>NIM 202410101130</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/profile.php?id=100052608563779"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/pramudyawp/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UC3VWdqLiSjXvOPRzYfdtaSQ">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer starts  -->
            <footer class="site-footer" id="contact">
                <div class="top-footer section">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <div class="footer-logo">
                                            <a href="index.php">
                                                <img src="logo.png" alt="">
                                            </a>
                                        </div>
                                        <p>Jalan Sukarno Hatta Nomor 172, Sumbersari, Jember.
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/profile.php?id=100052608563779">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/pramudyawp/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UC3VWdqLiSjXvOPRzYfdtaSQ">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-table-info">
                                            <h3 class="h3-title">Jam Buka</h3>
                                            <ul>
                                                <li><i class="uil uil-clock"></i> Senin - Jumat : 09:00 pagi - 10:00 malam</li>
                                                <li><i class="uil uil-clock"></i> Jumat - Minggu : 06:00 malam - 11:59 malam</li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu food-nav-menu">
                                            <h3 class="h3-title">Links</h3>
                                            <ul class="column-2">
                                                <li>
                                                    <a href="#home" class="footer-active-menu">Home</a>
                                                </li>
                                                <li><a href="#menu">Menu</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">PakEdy Cafe & Resto</h3>
                                            <ul>
                                                <li><a href="#">Syarat & Ketentuan</a></li>
                                                <li><a href="#">Kebijakan Privasi</a></li>
                                                <li><a href="#">Kebijakan Cookie</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="copyright-text">
                                    <p>Copyright &copy; Pemrograman Berbasis Web <span class="name">Kelompok 16 </span>Kelas SIB.
                                    </p>
                                </div>
                            </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/font-awesome.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script src="main.js"></script>
<script>
		$(document).ready(function () {
			$('#content').load('home.php');

			$('.menu').click(function (e) { 
				e.preventDefault();
				
				var menu = $(this).attr('id');

				if(menu == "menuHome"){
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('home.php');
					countCart();
				}else if(menu == "menuCart"){
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('cart.php');
					countCart();
				} 
			});
			countCart();
		});

		function countCart(){
			$.ajax({
				type: "GET",
				url: "proses-cart.php",
				dataType: "JSON",
				success: function (response) {
					console.log(response);

					$("#countCart").text("");
					$("#countCart").text(response);
				}
			});
		}

		function addCart($id){
			$.ajax({
				type: "POST",
				url: "proses-cart.php",
				data: {"proses" : "add", "id" : $id},
				dataType: "JSON",
				success: function (response) {
					console.log(response);
					countCart();
				}
			});
		}
		function deleteCart($id){
			$.ajax({
				type: "POST",
				url: "proses-cart.php",
				data: {"proses" : "delete", "id" : $id},
				dataType: "JSON",
				success: function (response) {
					console.log(response);

					if (response.message == "success") {
						alert("Pesanan berhasil dihapus");
					} else {
						alert("Pesanan gagal dihapus!");
					}
					countCart();
					$('#content').load('cart.php');
					
					
				}
			});
		}
	</script>
</body>
</html>