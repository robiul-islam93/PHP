
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ostad-assaignment-05</title>


   
    <!-- css link -->
    <link rel="stylesheet" href="style.css" />
    <!-- css link -->


    <!-- bootstrap link  start-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- bootstrap link end -->

    <!-- boostatrap js link start -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <!-- boostatrap js link end -->

    <style>
        .sidebar {
            height: 60%;
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
        <a href="role_management.php">Role Managment</a>
        <a href="user.php">User Dashboard</a>
        <a href="manager.php">Manager Dashboard</a>

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