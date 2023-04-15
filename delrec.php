<?php
    $con = mysqli_connect("localhost", "root", "", "rstr");
    $id = $_GET['id'];
    $query = "DELETE FROM `booktable` WHERE `id` =".$id;
    mysqli_query($con, $query);
    header('Location: http://localhost/Restaurants/bookinglist.php')
?>