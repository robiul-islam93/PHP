<?php
include('sidebar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>

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
<h1 class="text-center  bg-warning p-3">Weather Report</h1>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

<div class="bg-white  rounded-2 p-5" style="width: 700px;  margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
<label style="font-size:20px; font-weight: 750;">Weather Report</label>

<input type="number" class="form-control" name="weatherreport" placeholder="Number °C"><br>

<button type="submit" name="weather" class="btn btn-primary">Submit</button>
</div>


</form>

<?PHP

if(isset($_POST['weather'])){
    $weatherreport = $_POST['weatherreport'];


    if($weatherreport >= 30){
        $weather ="It's Warm";
    }elseif($weatherreport >= 20){
        $weather = "It's Freezing";
    }elseif(($weatherreport <= 10)){
        $weather= "It's Cool"; 
    }

    echo " <h3 class='text-center bg-warning p-3'>Your Weather Result:<br><br>Weather $weather </h3>";
}


?>


</body>
</html>