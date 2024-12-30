<?php
include("connect.php");

// Ambil data pembayaran dari database
$query = "SELECT p.*, h.name AS hotel_name FROM orders p JOIN hotels h ON p.hotel_id = h.id ORDER BY p.id DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/order.css">
    <title>Pesanan Anda</title>
</head>
<body>
<header class="header">
        <h1>Riwayat Pesanan Anda</h1>
    </header>
    
    <main class="orders">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="order-card">
                    <div class="order-image">
                        <img src= <?php echo $row['hotel_img']; ?> alt="<?php echo $row['hotel_name']; ?>">
                    </div>
                    <div class="order-details">
                        <h2><?php echo $row['hotel_name']; ?></h2>
                        <p><strong>Nama:</strong> <?php echo $row['name']; ?></p>
                        <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                        <p><strong>Jumlah Malam:</strong> <?php echo $row['night']; ?></p>
                        <p><strong>Total Harga:</strong> Rp <?php echo number_format($row['total_price'], 0, ',', '.'); ?></p>
                        <p><strong>Tanggal Pesanan:</strong> <?php echo $row['order_date']?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Anda belum memiliki riwayat pesanan.</p>
        <?php endif; ?>
    </main>
</body>
</html>
