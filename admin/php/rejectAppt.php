<?php 

    include 'db_connect.php'; 
    include 'config.php';

    session_start();


    function confirmAppt() {
        global $conn;
        $appt_id = $_POST['appt_id'];
        $appt_msg = $_POST['appt_msg'];

        $query = mysqli_query($conn, "UPDATE appt_table SET appt_status = 'rejected', appt_msg = '$appt_msg' WHERE appt_id = '$appt_id'");

    }
    



    confirmAppt();

?>
