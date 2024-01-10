<?php 
require 'conection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = " DELETE FROM film WHERE `film`.`id` = $id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:admin.php");
}
}
elseif(isset($_GET['time_id'])){
    $time_id = $_GET['time_id'];
    $sql = " DELETE FROM timeshow WHERE `timeshow`.`id` = $time_id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:admin.php");
}
}
?>