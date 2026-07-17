<?php
include "config/database.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Parking Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container-fluid p-5">

        <div class="text-center mb-5">

            <h1 class="display-4 text-success fw-bold">
                Parking Management System
            </h1>

            <p class="lead">
                Book your parking slot quickly, securely and efficiently.
            </p>

            <a href="login.php" class="btn btn-primary btn-lg me-3">
                Login
            </a>

            <a href="register.php" class="btn btn-success btn-lg">
                Register
            </a>

        </div>

        <div class="row text-center mb-5">

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body">

                        <h3 class="text-success">
                            Total Slots
                        </h3>

                        <h1>30</h1>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body">

                        <h3 class="text-primary">
                            Available
                        </h3>

                        <h1>29</h1>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body">

                        <h3 class="text-danger">
                            Occupied
                        </h3>

                        <h1>1</h1>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-body">

                        <h3 class="text-success">
                            Why Choose Our System?
                        </h3>

                        <hr>

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">
                                ✔ Secure Login
                            </li>

                            <li class="list-group-item">
                                ✔ Real-Time Parking Slot Availability
                            </li>

                            <li class="list-group-item">
                                ✔ Quick Booking
                            </li>

                            <li class="list-group-item">
                                ✔ Booking Cancellation
                            </li>

                            <li class="list-group-item">
                                ✔ User-Friendly Interface
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-body">

                        <h3 class="text-success">
                            Project Features
                        </h3>

                        <hr>

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">
                                👤 User Registration
                            </li>

                            <li class="list-group-item">
                                🔑 Secure Login
                            </li>

                            <li class="list-group-item">
                                🚗 Parking Slot Booking
                            </li>

                            <li class="list-group-item">
                                ❌ Cancel Booking
                            </li>

                            <li class="list-group-item">
                                📊 Dynamic Dashboard
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <div class="text-center mt-5">


        </div>

    </div>

</body>