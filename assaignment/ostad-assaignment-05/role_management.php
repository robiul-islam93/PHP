<?php
include('sidebar.php');


session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
    header("Location: login.php");

}


$roles = ['admin', 'editor', 'viewer'];

// Handle role management actions
if(isset($_POST['create'])) {
    $newRole = $_POST['new_role'];
    // Add validation and insert into the database if needed
    $roles[] = $newRole;
}

if(isset($_POST['edit'])) {
    $editedRoleIndex = $_POST['edited_role_index'];
    $editedRole = $_POST['edited_role'];
    // Add validation and update in the database if needed
    $roles[$editedRoleIndex] = $editedRole;
}

if(isset($_POST['delete'])) {
    $deletedRoleIndex = $_POST['deleted_role_index'];
    // Add validation and delete from the database if needed
    unset($roles[$deletedRoleIndex]);
    $roles = array_values($roles); // Re-index the array
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

    <style>
        .card{
            width: 65%;
            margin: auto;
        }
    </style>
  </head>
  <body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Role Management</title>
</head>
<body style="background-color: #797979;">
    <h2>Role Management</h2>
    
    <h3 >Create Role</h3>
    <div  class="bg-white rounded-2 p-5" style="width: 700px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
    <form method="post" action="">
        <label for="new_role">New Role:</label>
        <input type="text" name="new_role" required>
        <input type="submit" name="create" value="Create">
    </form>

    <h3>Edit Role</h3>
    <form method="post" action="">
        <?php foreach($roles as $index => $role): ?>
            <label for="edited_role">Edit <?php echo $role; ?>:</label>
            <input type="text" name="edited_role" value="<?php echo $role; ?>" required>
            <input type="hidden" name="edited_role_index" value="<?php echo $index; ?>">
            <input type="submit" name="edit" value="Edit">
        <?php endforeach; ?>
    </form>

    <h3>Delete Role</h3>
    <form method="post" action="">
        <?php foreach($roles as $index => $role): ?>
            <label for="deleted_role">Delete <?php echo $role; ?>:</label>
            <input type="checkbox" name="deleted_role_index[]" value="<?php echo $index; ?>">
        <?php endforeach; ?>
        <input type="submit" name="delete" value="Delete">
    </form>
    </div>
</body>
</html>
  </body>
</html>