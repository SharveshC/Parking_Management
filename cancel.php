<?php
session_start();
include "config/database.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['id'])) {
    die("No Slot Selected!");
}

$slot_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// Cancel only the logged-in user's active booking
mysqli_query($conn,
"UPDATE bookings
SET status='Cancelled'
WHERE slot_id='$slot_id'
AND user_id='$user_id'
AND status='Booked'");

// Make the slot available again
mysqli_query($conn,
"UPDATE parking_slots
SET status='Available'
WHERE id='$slot_id'");

header("Location: dashboard.php");
exit();
?>