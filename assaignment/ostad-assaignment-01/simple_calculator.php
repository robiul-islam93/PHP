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

<h1 class="text-center  bg-warning p-3">Simple Calculator</h1>


<form action="<?php $_SERVER['PHP_SELF'] ?>"method="POST">

<div  class="bg-white  rounded-2 p-4" style="width: 700px;  margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">

<label style="font-size:20px; font-weight: 750;">Simple Calculator </label>

<input type="number" class="form-control" name="number1" placeholder="Input your number" required><br>
<input type="number" class="form-control" name="number2" placeholder="Input your number"  required><br>

<select class="form-select" name="operation">
    <option value=""> select the operation</option>
    <option value="addition">addition</option>
    <option value="subtraction">subtraction</option>
    <option value="multiplication">multiplication</option>
    <option value="division">division</option>
</select>

<button type="submit" name= "submit_button" class="btn m-3 btn-primary">Submit</button>
</div>

</form>

<?php

if(isset($_POST['submit_button'])){

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if($operation=="addition"){
        $result = $number1 + $number2;

    }
    elseif($operation=="subtraction"){
        $result = $number1 - $number2;

    }
    
    elseif($operation=="multiplication"){
        $result = $number1 * $number2;

    }
    
    elseif($operation=="division"){
    $result = $number1 / $number2;

    }

    echo "<h3 class='text-center bg-warning p-3'> Calculation  Result: $result</h3>";
}



?>

</body>
</html>