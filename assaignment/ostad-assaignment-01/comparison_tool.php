

<?php
include('sidebar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>

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
<body style="background-color: rgba(37, 34, 1, 0.644);">

<h1 class="text-center  bg-warning p-3">Comparison Tool</h1>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

<div  class="bg-white rounded-2 p-5" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
<label style="font-size:20px; font-weight: 750;">Comparison Tool Select </label>
<input type="number" class="form-control" name="comparison1" placeholder="input  Number" required><br>

<input type="number" class="form-control" name="comparison2" placeholder="input Number" required><br>


<button type="submit"  name="Comparison" class="btn btn-primary">Submit</button>
</div>

</form>

<?php

if(isset($_POST['Comparison'])){
    $comparison1 = $_POST['comparison1'];
    $comparison2 = $_POST['comparison2'];

    $large = ($comparison1 > $comparison2) ? $comparison1 : $comparison2 ;

echo " <h2  class='text-center bg-warning p-3'> The Large Number Is $large </h2> ";
    

}

?>

</body>
</html>