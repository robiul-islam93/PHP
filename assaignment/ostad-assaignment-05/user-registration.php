<?php
include("hedar.php");


$usersfiles = 'users.json';
$users = file_exists($usersfiles) ? json_decode(file_get_contents($usersfiles), true) : [];

function saveusers($users, $file){
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

$errorMessage = '';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username) || empty($email) || empty($password)){
        $errorMessage = 'Please Fill All The Fields';
    } else {
        if(isset($users[$email])){
            $errorMessage = "Email Already Exists";
        } else {
            $users[$email] = [
                'username' => $username,
                'email' => $email,
                'password' => $password, // Fix the typo here
                'role' => ''
            ];
        }
    }
}
?>

<div class="register_form">
    <form action="" method="POST">
        <?php
        if(!empty($errorMessage)){
            echo "<p>$errorMessage</p>";
        }
        ?>
        <div class="bg-white rounded-2 p-5" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
            <h1 class="text-center">Registration Now</h1>
            <label style="font-size:20px; font-weight: 750;">Username </label>
            <input type="text" class="form-control" name="username" placeholder="username"><br>

            <label style="font-size:20px; font-weight: 750;">Email: </label>
            <input type="email" class="form-control" name="email" placeholder="email"><br>

            <label style="font-size:20px; font-weight: 750;">Password: </label>
            <input type="password" class="form-control" name="password" placeholder="password"><br>

            <input type="hidden" class="form-control" name="role">

            <button type="submit" name="register" class="btn btn-primary d-block w-100">Register</button>
        </div>
    </form>
</div>
