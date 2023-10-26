
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ostad-assaignment-05</title>


    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .sidebar {
            height: 50%;
            width: 300px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            /* padding-top: 20px; */
        }

        .sidebar a {
            padding: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            font-weight: bold;
            display: block;
        }

        .sidebar a:hover {
            background: yellow;
            color: black;

        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="bg-warning p-4 text-center">Dashbord</h4>
        <a href="admin_Dashboard.php">Admin Dashboard</a>
        <a href="user_Dashboard.php">Users Dashboard</a>

        <div style="background: #fff; border-radius: 10px;" class="sidenav-footer mx-3 ">
            <a class="btn mt-3 w-100 text-dark" href="logout.php">
                Logout
            </a>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>