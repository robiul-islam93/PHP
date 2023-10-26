<?php
session_start();

if(isset($_POST['login'])){
  $email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";
$fp = fopen("users.txt","r");

$roles = array();
$emails = array();
$passwords = array();

while($line = fgets($fp)){
  $values = explode(",", $line);
  array_push($roles, trim($values['0']));
  array_push($emails, trim($values['1']));
  array_push($passwords,  trim($values['2']));
}
fclose($fp);

for( $i= 0; $i<count($roles); $i++){
if($email == $emails[$i] && $password == $passwords[$i]){
  $_SESSION["role"] = $roles[$i];
  $_SESSION["email"] = $emails[$i];
  $_SESSION["password"] = $passwords[$i];
header("Location: dashbord.php");
}else{
  $errorMessage = "Invaliad Gmail And Password";
}

}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

    <title>Register Form</title>
  </head>
  <body style="    background-color: #797979;">

  <div class="register_form">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<div  class="bg-white rounded-2 p-5" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
<h1 class="text-center">Login To Your Account</h1>
<label style="font-size:20px; font-weight: 750;">Email: </label>
<input type="email" class="form-control" name="email" placeholder="email" required><br>


<label style="font-size:20px; font-weight: 750;">Password: </label>
<input type="password" class="form-control" name="password" placeholder="********" required><br>

<!-- <p class="text-warning">
  echo $errorMessage; 
</p> -->
<button type="submit"  name="login" class="btn btn-primary d-block w-100">Login</button>
<p>Don't have an acoount? <a href="registration-form.php">Registration Now</a></p>
</div>
</form>
</div>
  
</body>
</html>