<?php
include('sidebar.php');


session_start();
if (isset($_POST['delete'])) {
    $deletedRoleIndex = $_POST['deleted_role_index'];
    // Add validation and delete from the database if needed
    unset($roles[$deletedRoleIndex]);
    $roles = array_values($roles); // Re-index the array
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
                        <a href="user-registration.php" class="btn btn-primary float-end">Create User</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="update_user.php" class="btn btn-success p-2 btn-sm">Edit</a>

                                    <a href="delete_user.php" class="btn btn-danger p-2 btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>