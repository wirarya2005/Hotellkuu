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
    <!-- Styling -->
    <link rel="stylesheet" href="style/order.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Pesanan Anda</title>
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
                <li><a href="order.php" target="_blank">Pesanan Anda</a></li>
                <li><a href="main.php">Services</a></li>
                <li><a href="main.php">Contact Us</a></li>

            </ul>
        </nav>


        <div class="login">
            <a href="#" id="menu"><i class="ri-menu-line"></i></a>
            <a href="logout.php">Logout</a>
        </div>

    </header>

    <main class="orders">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="order-card">
                    <div class="order-image">
                        <img src=<?php echo $row['hotel_img']; ?> alt="<?php echo $row['hotel_name']; ?>">
                    </div>
                    <div class="order-details">
                        <h2><?php echo $row['hotel_name']; ?></h2>
                        <p><strong>Nama:</strong> <?php echo $row['name']; ?></p>
                        <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                        <p><strong>Jumlah Malam:</strong> <?php echo $row['night']; ?></p>
                        <p><strong>Total Harga:</strong> Rp <?php echo number_format($row['total_price'], 0, ',', '.'); ?></p>
                        <p><strong>Tanggal Pesanan:</strong> <?php echo $row['order_date'] ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Anda belum memiliki riwayat pesanan.</p>
        <?php endif; ?>
    </main>
</body>

</html>