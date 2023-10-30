<?php
include('sidebar.php');
session_start();

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width:600px; margin:auto">
                <div class="card-header">
                <h2 class="text-center">Update User Role</h2>
                <form action="">
                    <select class="form-control" name="role" id="">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select> <br>
                    <button type="submit" class="btn btn-success p-2 btn-sm">Update</button>
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>