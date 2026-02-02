<?php
include "../config/includes.php";
$list = retrieveALLuser();

// echo json_encode($list);
?>





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
    <h1>this a retrieve oy</h1>


    <table>

        <tr>
            <th>name</th>
            <th>age</th>
            <th>address</th>
            <th>username</th>
            <th>action</th>


        </tr>
        <?php
        foreach ($list as $item) {
        ?>
            <tr>
                <td><?= $item["names"] ?></td>
                <td><?= $item["age"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["username"] ?></td>
                <td><a href="viewPage.php?user_id=<?= $item['user_id'] ?>">view</a></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>