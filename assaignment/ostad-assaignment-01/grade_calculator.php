

<?php
include('sidebar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>

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
<h1 class="text-center  bg-warning p-3">Grade Calculator</h1>


<form class="m-3" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
   <div class="bg-white rounded-2 p-5" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
   <label style="font-size:20px; font-weight:750">Seleted Your Grade Number</label><br>
    <input class="form-control"  type="number" name="grade1"  required><br>
    <input class="form-control"  type="number" name="grade2"  required><br>

    <button type="submit"  name="gradenumber" class="btn btn-primary ">Submit</button>
   </div>
</form>

<?php
if(isset($_POST['gradenumber'])){
    $grade1 = $_POST['grade1'];
    $grade2 = $_POST['grade2'];

    $average = ($grade1 + $grade2)/2;

    if($average >= 80){
        $resultGrade ="A+";
    }elseif($average >= 70){
        $resultGrade = "A";
    }elseif($average >= 60){
        $resultGrade = "A-";
    }elseif($average >= 50){
        $resultGrade = "B";
    }elseif($average >=40){
        $resultGrade = "C";
    }elseif($average >=33){
        $resultGrade = "D";
    }elseif($average <=32 ){
        $resultGrade = "F";
    }  
    
    // echo "<h2 class='text-center bg-warning p-3'> Your Result </h2><br>";
    // echo "<h4 > Your Avarage: $average </h4>";
    // echo "<h4 >Your Grade: $resultGrade </h4>";

    echo "'<div class='text-center bg-warning p-2'>'
    <h2 > Your Result </h2>
    <h4 > Your Avarage: $average </h4>
    <h4 >Your Grade: $resultGrade </h4>
    '</div>'";
}



?>
</body>
</html>