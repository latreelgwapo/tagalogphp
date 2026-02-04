<?php
include "../config/includes.php";

if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];
    $getprod = getproducts($prod_id);
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
    <?php
    include "resources/navigation.php";
    ?>
    <h1>prod_name: <?= $getprod[0]["prod_name"] ?></h1>
    <h1>prod_quantity: <?= $getprod[0]["prod_quantity"] ?></h1>
    <h1>prod_type: <?= $getprod[0]["prod_type"] ?></h1>
    <h1>prod_price: <?= $getprod[0]["prod_price"] ?></h1>
    <h1>prod_date_added: <?= $getprod[0]["prod_date_added"] ?></h1>
    <a href="">EDIT</a>
</body>