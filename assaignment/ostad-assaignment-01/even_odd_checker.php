

<?php
include('sidebar.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>

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
    <!-- background-color: rgba(255, 251, 0, 0.952); -->
<body style="background-color: rgba(37, 34, 1, 0.644);">

<h1 class="text-center bg-warning p-3">Even or Odd Checker</h1>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<div class="bg-white p-5 rounded-2" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
<label style="font-size: 20px; font-weight: 750;" for="oddeven">Select Your Number</label>
<input type="text" class="form-control" name="evenoddNumber" required placeholder="check even and odd"><br>
<button type="submit" name="even_odd" class="btn btn-primary"> Submit </button>
</div>
</form>

<?php

if(isset($_POST['even_odd'])){

    $evenoddNumber = $_POST['evenoddNumber'];

    if($evenoddNumber %2 ==0){
        echo "<h2 class='text-center bg-warning p-3'>$evenoddNumber Number Is Even </h2>";
    }else{
        echo "<h2 class='text-center bg-warning p-3'>$evenoddNumber Number Is Odd </h2>";
    }

}



?>

</body>
</html>






