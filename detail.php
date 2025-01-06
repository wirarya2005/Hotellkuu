<?php
include("hotel.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelKu</title>

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
                <li><a href="main.php">Home</a></li>
                <li><a href="main.php">Book</a></li>
                <li><a href="order.php">Pesanan Anda</a></li>
                <li><a href="main.php">Services</a></li>
                <li><a href="main.php">Contact Us</a></li>
            </ul>
        </nav>



        <div class="login">
            <a href="" id="menu"><i class="ri-menu-line"></i></a>
            <a href="">Login</a>
        </div>

    </header>


    <!-- Room Detail -->
    <main class="room">
        <aside class="detail-img">
            <img src="img/swiss1.jpeg" alt="" class="imgClick">
            <img src="img/swiss2.jpeg" alt="" class="imgClick">
            <img src="img/swiss3.jpeg" alt="" class="imgClick">
            <img src="img/swiss4.jpeg" alt="" class="imgClick">
            <img src="img/swiss5.jpeg" alt="" class="imgClick">
            <img src="img/swiss6.jpg" alt="" class="imgClick">
            <img src="img/bg-1.jpg" alt="" class="imgClick">
            <img src="img/bg-1.jpg" alt="" class="imgClick">
            <img src="img/bg-1.jpg" alt="" class="imgClick">
        </aside>

        <section class="room-detail">
            <h1><?php echo $hotel['name']; ?></h1>
            <p><?php echo $hotel['description']; ?></p>
            <p class="bintang">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.842484340276!2d107.17451!3d-6.2844268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b281bf9fe27%3A0xc701baf8c57ddae0!2sSwiss-Belinn%20Cikarang!5e0!3m2!1sen!2sid!4v1734311080700!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <h3>Rp <s>10.000.000</s> <?php echo $hotel['price'] ?></h3>
            <a href="payment.php?id=<?php echo $hotel['id']; ?>">Booking Sekarang</a>

        </section>
    </main>

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
            </ul>
        </div>
    </footer>

    <div id="popup">
        <img src="" alt="" class="imPop">
    </div>
    <!-- Contact Start -->

    <!-- JS -->
    <script src="script/detail.js"></script>


</body>

</html>