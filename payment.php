<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelKu</title>

    <link rel="stylesheet" href="style/styles.css">

    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

</head>
<body>
    
    <div class="payment">
        <div class="left">
            <div class="hotel-img">
                <img src="img/tes.jpg" alt="">
            </div>
            <h2>Swiss Berlin</h2>


        </div>

        <div class="right">
            <form action="POST">
                <label for="nama">Nama : </label>
                <input type="text" placeholder="Arya Wiratama" id="nama">

                <label for="email">Email : </label>
                <input type="email" placeholder="arya@gmail.com" id="email">

                <label for="night">Night : </label>
                <input type="number" placeholder="3" id="night" value="1">

                <label for="phone">Phone Number</label>
                <input type="number" id="phone" placeholder="081283031559">

                <h2 id="total-Harga">Rp. {total-Harga}</h2>

                <button><a href="transaction.html" id="bayar">Bayar Sekarang!!!</a></button>

            </form>
        </div>
    </div>

    <script src="script/payment.js"></script>
</body>
</html>