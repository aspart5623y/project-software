<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPNO - Comp Sci HOD Office</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/bg/index.jpg" type="image/x-icon">
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="../vendor/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- Font Awesome Linking -->
    <link rel="stylesheet" href="../vendor/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
    <!-- External CSS Stylesheet Link -->
    <link rel="stylesheet" href="../admin/css/style.css">
</head>

<?php 

    include '../php/db_connect.php'; 

    session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location:'.SITEURL);
    } else if (isset($_SESSION['user_id']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] == "user") {
        header('Location:'.SITEURL.'user-dashboard/');
    }


    
    $user_id = $_SESSION['user_id'];
    $getInfo = mysqli_query($conn, "SELECT * FROM users_table WHERE user_id_num = '$user_id'");

    $row = mysqli_fetch_assoc($getInfo);

    $full_name = $row['full_name']


?>



