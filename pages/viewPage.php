<?php
include "../config/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $getUser = getUser($user_id);
} else {
    echo "<script> window.location.href='retrivePage.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<?php 
include "resources/header.php";
?>

<body>
    <h1>View and Update Page</h1>
    <label for="user_name">Name</label> <br>
    <input name="user_name" type="text" value="<?= $getUser[0]['name'] ?>"> <br>
    <label for="user_name">Age</label> <br>
    <input name="user_name" type="number" value="<?= $getUser[0]['age'] ?>"><br>
    <label for="user_name">Address</label> <br>
    <input name="user_name" type="number" value="<?= $getUser[0]['address'] ?>"> <br>
    <label for="user_name">Username</label> <br>
    <input name="user_name" type="number" value="<?= $getUser[0]['username'] ?>"><br>
    <label for="user_name">Password</label> <br>
    <input name="user_name" type="number" value="<?= $getUser[0]['password'] ?>"><br>

</body>