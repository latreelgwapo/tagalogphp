<!DOCTYPE html>
<html lang="en">

<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigation.php";
    ?>
    <!-- contents -->
    <div>
        <h1>create user</h1>
        <form action="functions/createuser.php" method="POST">
            <label for="">name</label>
            <input type="text" name="user_name">
            <label for="">age</label>
            <input type="number" name="user_age">
            <label for="">address</label>
            <input type="text" name="user_address">
            <button>I LOVE YOU</button>
        </form>
    </div>


</body>

</html>