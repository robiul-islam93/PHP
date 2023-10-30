<?php
include('sidebar.php');
session_start();

$users = json_decode(file_get_contents('users.json'), true);

if (!$users[$_SESSION['email']]) {
    echo "Email Not Found";
}


if (isset($_POST['update_role'])) {
    $users_email = $_SESSION['email'];
    $new_role = $_POST['role'];

    if (isset($users[$users_email])) {
        $users[$users_email]['role'] = $new_role;
        file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
    }
}


if (isset($_POST['delete_user'])) {
    $users_email = $_SESSION['email'];

    if (isset($users[$users_email])) {
        unset($users[$users_email]['role']);
        file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

 
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width:600px; margin:auto">
                <div class="card-header">
                <h2 class="text-center">Update User Role</h2>
                <form action="" method="POST">
        <input type="text" name="role" class="form-control"> <br>
        <button type="submit" name="update_role" class="btn btn-success p-2 btn-sm">Update</button>
        <button type="submit" name="delete_user" class="btn btn-danger p-2 btn-sm">delete</button>
        
    </form> 
                </div>
            </div>
        </div>
    </div>
</div>