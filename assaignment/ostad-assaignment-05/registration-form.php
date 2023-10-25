<?php
include("index.php");

?>

<div class="register_form">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<div  class="bg-white rounded-2 p-5" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
<h1 class="text-center">Registration Now</h1>
<label style="font-size:20px; font-weight: 750;">Username </label>
<input type="text" class="form-control" name="username" placeholder="username" required><br>

<label style="font-size:20px; font-weight: 750;">Email: </label>
<input type="email" class="form-control" name="email" placeholder="email" required><br>


<label style="font-size:20px; font-weight: 750;">Password: </label>
<input type="password" class="form-control" name="password" placeholder="password" required><br>


<button type="submit"  name="register" class="btn btn-primary d-block w-100">Register</button>
</div>

</form>
</div>

<?php 

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($username || $email || $password) {
        $userDetails = "$username |  $email  |  $password\n";
        file_put_contents('users.txt', $userDetails, FILE_APPEND);

        echo '<h2 class="text-center bg-success p-2">Registration successful!</h2>';
    } else {
        echo "<h3>Something Went To Wront</h3>";

      
    }
}

?>

