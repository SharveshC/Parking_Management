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

$user_id = $_SESSION['user_id'];
$slot_id = $_GET['id'];

$date = date("Y-m-d");
$time = date("H:i:s");

// Check whether slot is already booked
$check = mysqli_query($conn,
"SELECT * FROM bookings
WHERE slot_id='$slot_id'
AND status='Booked'");

if(mysqli_num_rows($check)>0){
    die("Slot Already Booked!");
}

// Insert booking
$sql = "INSERT INTO bookings(user_id,slot_id,vehicle_number,booking_date,booking_time,status)
VALUES('$user_id','$slot_id','TN00AB1234','$date','$time','Booked')";

if(!mysqli_query($conn,$sql)){
    die(mysqli_error($conn));
}

// Update slot status
$sql2 = "UPDATE parking_slots
SET status='Occupied'
WHERE id='$slot_id'";

if(!mysqli_query($conn,$sql2)){
    die(mysqli_error($conn));
}

header("Location: dashboard.php");
exit();
?>