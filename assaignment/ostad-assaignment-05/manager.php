<?php

include("sidebar.php");
session_start();


if($_SESSION["role"] == "admin" || $_SESSION["role"] == "user"){
    header("Location: login.php");
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Add any additional stylesheets or scripts here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        section {
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .user-info {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* margin-bottom: 20px; */
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Manager Dashboard</h1>
    </header>

    <section>
        <div class="user-info">
            <h2>Welcome, manager!</h2>
            <!-- Add user-specific information and functionality here -->
            <p>Your personalized content goes here.</p>
        </div>
    </section>


</body>
</html>
