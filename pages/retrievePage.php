<?php
$list = ['john', 'tagalog', 'amad', 'chaff', 'raymark', 'dacillo', 'jimkyut'];
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
    <ul>
        <?php
        foreach ($list as $item) {
        ?>
            <li> <?= $item ?></li>

        <?php
        }
        ?>
    </ul>


    <table>

        <tr>
            <th>name</th>
            <th>action</th>
        </tr>
        <?php
        foreach ($list as $item) {
        ?>
            <tr>
                <td><?= $item ?></td>
                <td><button>view</td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>