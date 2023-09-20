

<?php
include('sidebar.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>

    <!-- Include your custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Include Bootstrap CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgba(37, 34, 1, 0.644);">
    <h1 class="text-center bg-warning p-3">Temperature Converter</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <div  class="bg-white rounded-2 p-5" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
 <label style="font-size: 40px;" for="temperature">Temperature Converter</label>
        <br>
        <!-- Use an input type="text" for better user input flexibility -->
        <input type="text" class="form-control" name="temperature" id="temperature" required placeholder="Enter Temperature"><br>
        
        <select class="form-select" name="conversion" id="conversion" required>
            <option value="">Select the conversion</option>
            <option value="celsius">Celsius to Fahrenheit</option>
            <option value="fahrenheit">Fahrenheit to Celsius</option>
        </select><br>
        
        <!-- Change the button type to "submit" -->
        <button type="submit" name="temperaturebtn" class="btn btn-primary">Convert</button>
 </div>
        
    </form>

    <?php
    if(isset($_POST['temperaturebtn'])){
        $temperature = $_POST['temperature'];
        $conversion = $_POST['conversion'];

        if($conversion == "celsius"){
            // Convert Celsius to Fahrenheit
            $temperatureResult = (($temperature * 9/5) + 32);
            echo "<h3 class='text-center  bg-warning p-3'> $temperature  Celsius =  $temperatureResult  Fahrenheit</h3>";
        }
        elseif ($conversion == "fahrenheit") {
            // Convert Fahrenheit to Celsius
            $temperatureResult = (($temperature - 32) * 5/9);
            echo "<h3 class='text-center bg-warning p-3'>$temperature  Fahrenheit =   $temperatureResult  Celsius</h3>";
        }
    }
    ?>

</body>
</html>