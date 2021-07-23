<?php 

    include 'db_connect.php'; 
    include 'config.php';

    session_start();


    function confirmAppt() {
        global $conn;
        $appt_id = $_POST['appt_id'];

        $query = mysqli_query($conn, "UPDATE appt_table SET appt_status = 'confirmed' WHERE appt_id = '$appt_id'");

    }
    



    confirmAppt();

?>
