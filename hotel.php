<?php
include("connect.php");
$id = 1; 
$sql = "SELECT * FROM hotels WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $hotel = $result->fetch_assoc();
} else {
    die("Hotel tidak ditemukan.");
}

?>
