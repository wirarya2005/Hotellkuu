<?php
include("connect.php");

if (isset($_GET['id'])) {
    $hotel_id = $_GET['id'];

    $query = "SELECT * FROM hotels WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $hotel_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $hotel = $result->fetch_assoc();
    } else {
        die("Hotel tidak ditemukan.");
    }
} else {
    die("ID Hotel tidak ditemukan.");
}
?>

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
            <form action="process_payment.php" method="POST">
                <input type="hidden" name="hotel_id" value="<?php echo $hotel['id']; ?>">
                <input type="hidden" name="price" value="<?php echo $hotel['price']; ?>">
                <input type="hidden" name="image_url" value="<?php echo $hotel['image_url'];?>">

                <label for="email">Email :</label>
                <input type="email" placeholder="Your Email" id="email" name="email" required>

                <label for="name">Nama :</label>
                <input type="text" placeholder="Your Name" id="name" name="name" required>

                <label for="night">Night :</label>
                <input type="number" placeholder="3" id="night" name="night" value="1" required>

                <label for="payment_method">Payment Method:</label>
                <select type="payment_method" id="payment_method" placeholder="Choose your Payment Method!"
                    name="payment_method" required>
                    <option type="payment_method" value="" disabled selected>Select Payment Method</option>
                    <option value="Bank">Bank</option>
                    <option value="E-Money">E-Money</option>
                </select>

                <label for="total_harga"><?php echo $hotel['price']; ?></label>

                <button type="submit" id="bayar">Bayar Sekarang!</button>
            </form>
        </div>
    </div>

    <script src="script/payment.js"></script>
</body>

</html>