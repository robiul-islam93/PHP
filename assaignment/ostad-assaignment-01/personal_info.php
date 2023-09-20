
<?php
include('sidebar.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostad Assaignment No 1</title>

    <!-- custom css start -->
    <link rel="stylesheet" href="assets\css\style.css">
    <!-- custom css end -->
    
    <!-- bootstrap min css link start  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- bootstrap min css link end  -->

    <!-- bootstrap min js link start -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>

    <!-- bootstrap min js link end -->
</head>
<body style="  background-color: rgba(247, 247, 247, 0.822);">
    <h1 class="text-center bg-warning p-3">My Personal Information Page</h1>
    <?php

$myName ="MD Ismail Hossain";

$myAge = 28;

$country = "Bangladesh";

$brief_Introduction = "I'm a computer science engineer.<br> Experienced in HTML, CSS with Bootstrap, and 
PHP, Laravel.<br> Skilled in developing visually appealing web applications.";

echo  "<h3 class='text-center w-150 '><span class='text-info'> Name:
</span> $myName </h3>";
echo  "<h3 class='text-center w-150 border border-2 p-2'><span class='text-info'> My Age:</span> $myAge </h3>";
echo  "<h3 class='text-center w-150 border border-2 p-2'><span class='text-info'> My Country:</span> $country </h3>";
echo  "<h3 class='text-center w-150 border border-2 p-2'><span class='text-info'> My Brief Introduction:</span> $brief_Introduction </h3>";

?>
</body>
</html>