<?php
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hotel_id = $_POST['hotel_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $payment_method = $_POST['payment_method'];
    $night = $_POST['night'];
    $total_price = $_POST['price'] * $night;

    // Simpan data pembayaran ke database
    $query = "INSERT INTO orders (hotel_id, name, email, payment_method, night, total_price) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("isssid", $hotel_id, $name, $email, $payment_method, $night, $total_price);

    if ($stmt->execute()) {
        header("Location: order.php?status=success");
    } else {
        echo "Gagal memproses pembayaran.";
    }
}
?>
