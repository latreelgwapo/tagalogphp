<?php
include "../../config/includes.php";

if (isset($_POST['user_id'])) {

    $name = $_POST['namez'];
     $age = $_POST['age'];
    $address = $_POST['address'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $user_id = $_POST['user_id'];


    $result = updateUSer($userid, $namez, $age, $address, $username, $password);

    if($result){
        echo "<script> window.location.href='retrievePage.php' </script";
    }else{
        echo "<script> window.location.href='../viewPage.php?user_id'".$userid." ' </script";
    }
}else{
    echo "<script> window.location.href='retrievePage.php' </script";

}
?>