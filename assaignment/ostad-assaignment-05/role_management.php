
<?php
include('sidebar.php');

session_start();

if($_SESSION["role"] == "user" || $_SESSION["role"] == "manager"){
    header("Location: login.php");
  }

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="text-center"> Role Management Page</h2>
            <div class="card" style="width:600px; margin:auto">
                <div class="card-header">
                    <h4>
                        User
                        <a href="registration-form.php" class="btn btn-primary float-end">Create User</a>
                    </h4>
                </div>

            </div>
        </div>
    </div>
</div>