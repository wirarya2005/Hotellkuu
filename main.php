<?php 
session_start();
include("connect.php");
echo "<script>alert('Login berhasil!')</script>";
include("hotel.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelKu</title>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="style/styles.css">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Type JS -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>

    <header class="header">
        <div class="logo">
            <h1>HotelKu</h1>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#booking">Book</a></li>
                <li><a href="order.php">Pesanan Anda</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>

            </ul>
        </nav>


        <div class="login">
            <a href="#" id="menu"><i class="ri-menu-line"></i></a>
            <a href="logout.php">Logout</a>
        </div>

    </header>

    <!-- Home Start -->
    <main class="home" id="home">
        <div class="hero">
            <h1>Spend Quality Holidays With Us</h1>
            <h2>Pesan dengan Hotelku, karena <span class="text"></span></h2>
        </div>
    </main>

    <!-- Home End -->


    <!-- Booking Start -->

    <main class="booking" id="booking"> `
        <div class="judul-booking">
            <h1>Booking</h1>
        </div>

        <div class="card">
            <div class="card-detail" id="pertama">
                <img src="img/swiss3.jpeg" alt="">
                <div class="deskripsi">
                    <h3>Swiss Berlin</h3>
                    <h3>&#9733;&#9733;&#9733;&#9733;&#9733;</h3>
                </div>
                <a href="detail.php">Booking!</a>
            </div>
            <div class="card-detail" id="pertama">
                <img src="img/bg-1.jpg" alt="">
                <div class="deskripsi">
                    <h3>Swiss Berlin</h3>
                    <h3>&#9733;&#9733;&#9733;&#9733;&#9733;</h3>
                </div>
                <a href="">Booking!</a>
            </div>
            <div class="card-detail" id="pertama">
                <img src="img/bg-1.jpg" alt="">
                <div class="deskripsi">
                    <h3>Hotel Sampurasun</h3>
                    <h3>&#9733;&#9733;&#9733;&#9733;&#9733;</h3>
                </div>
                <a href="">Booking!</a>
            </div>
            <div class="card-detail" id="kedua">
                <img src="img/bg-1.jpg" alt="">
                <div class="deskripsi">
                    <h3>Jaya Indonesia Hotel</h3>
                    <h3>&#9733;&#9733;&#9733;&#9733;&#9733;</h3>
                </div>
                <a href="">Booking!</a>
            </div>
            <div class="card-detail" id="kedua">
                <img src="img/bg-1.jpg" alt="">
                <div class="deskripsi">
                    <h3>Swiss Berlin</h3>
                    <h3>&#9733;&#9733;&#9733;&#9733;&#9733;</h3>
                </div>
                <a href="">Booking!</a>
            </div>
            <div class="card-detail" id="kedua">
                <img src="img/bg-1.jpg" alt="">
                <div class="deskripsi">
                    <h3>Swiss Berlin</h3>
                    <h3>&#9733;&#9733;&#9733;&#9733;&#9733;</h3>
                </div>
                <a href="">Booking!</a>
            </div>
        </div>

        <div class="lihat">
            <a href="">Lihat Selengkapnya</a>
        </div>
    </main>


    <!-- Booking End -->


    <!-- Services Start -->

    <main class="services" id="services">
        <section class="main-services">
            <h2>Our Services</h2>
            <ul>
                <li><i class="ri-customer-service-line"> 24 Hours Services</i></li>
                <li><i class="ri-secure-payment-line"> Secure Payment</i></li>
                <li><i class="ri-wallet-3-line"> Affordable</i></li>
            </ul>
        </section>
        <aside class="services-img">
            <img src="img/bg-1.jpg" alt="">
        </aside>
    </main>

    <!-- Services End -->

    <!-- Contact Start -->
    <footer class="footer" id="contact">
        <div class="copy">
            <h3>&copy; HotelKu 2024</h3>
        </div>

        <div class="sosmed">
            <ul>
                <li><a href=""><i class="ri-instagram-line"></i></a></li>
                <li><a href=""><i class="ri-mail-line"></i></a></li>
                <li><a href=""><i class="ri-facebook-box-fill"></i></a></li>
                ~
            </ul>
        </div>
    </footer>
    <!-- Contact Start -->

    <!-- JS -->
    <script src="script/main.js"></script>


</body>

</html>