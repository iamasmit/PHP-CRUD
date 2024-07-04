<?php
include 'connect.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $sql = "DELETE FROM crud WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        header('location:display.php');
    } else {
        // echo "Data not Deleted";
        die(mysqli_error($conn));
    }
}
