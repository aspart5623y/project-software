<?php 

    include 'db_connect.php'; 
    include 'config.php';

    $id = $_POST['id'];

    $query = mysqli_query($conn, "DELETE FROM appt_slip WHERE slip_id = '$id'");

    if ($query) {
        echo 'done';
    }






?>