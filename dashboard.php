<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include "config/database.php";

$user_id = $_SESSION['user_id'];

// Available Slots
$available = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(*) AS total FROM parking_slots WHERE status='Available'"))['total'];

// Occupied Slots
$occupied = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(*) AS total FROM parking_slots WHERE status='Occupied'"))['total'];

// My Bookings
$myBookings = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(*) AS total FROM bookings WHERE user_id='$user_id' AND status='Booked'"))['total'];

?>
<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">

Welcome,
<?php echo $_SESSION['full_name']; ?>

</h2>

<div class="row">

<div class="col-md-4">

<div class="card bg-success text-white">

<div class="card-body text-center">

<h4>Available Slots</h4>

<h2><?php echo $available; ?></h2>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card bg-danger text-white">

<div class="card-body text-center">

<h4>Occupied Slots</h4>

<h2><?php echo $occupied; ?></h2>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card bg-primary text-white">

<div class="card-body text-center">

<h4>My Bookings</h4>

<h2><?php echo $myBookings; ?></h2>

</div>

</div>

</div>

</div>

<hr>

<h3>Parking Slots</h3>

<div class="row">

<?php

$result = mysqli_query($conn,"SELECT * FROM parking_slots");

while($slot=mysqli_fetch_assoc($result))
{

?>

<div class="col-md-3 mb-3">

<div class="card">

<div class="card-body text-center">

<h4><?php echo $slot['slot_number']; ?></h4>

<p><?php echo $slot['floor']; ?></p>

<?php

if($slot['status']=="Available")
{

?>

<span class="badge bg-success mb-2">

Available

</span>

<br>

<a
href="book_slot.php?id=<?php echo $slot['id']; ?>"
class="btn btn-success">

Book

</a>

<?php

}
else
{

?>

<span class="badge bg-danger mb-2">
Occupied
</span>

<br>

<a href="cancel.php?id=<?php echo $slot['id']; ?>"
class="btn btn-danger mt-2">

Cancel

</a>

<?php

}

?>

</div>

</div>

</div>

<?php

}

?>

</div>

<a href="logout.php" class="btn btn-danger">

Logout

</a>

</div>

</body>

</html>