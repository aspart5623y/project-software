<?php 

    // include 'db_connect.php'; 
    // include 'config.php';

    // session_start();
    $title = $description = '';

    if (isset($_POST['title'])) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
    }

    if (isset($_POST['description'])) {
        $description = mysqli_real_escape_string($conn, $_POST['description']);
    }

    function sendAppt() {

        global $conn;
        $slot = '';
        
        $title = mysqli_real_escape_string($conn, $_POST['title']);

        $description = mysqli_real_escape_string($conn, $_POST['description']);
        


        $checkDate = mysqli_query($conn, "SELECT * FROM appt_table WHERE slot = '$slot'");
        
        if(mysqli_num_rows($checkDate) > 0) {  

            $_SESSION['error'] = "This time has already been booked!"; 

        } else if(!isset($_POST['appt_slip'])) {  

            $_SESSION['error'] = 'Please choose a slot for your appointment'; 

        } else {  
            $slot = mysqli_real_escape_string($conn, $_POST['appt_slip']);
            $sender_id = $_SESSION['user_id'];
            $currentTime = date('h:ma');
            $currentDate = date('Y-m-d');
            $booking_date = "$currentDate, $currentTime";
            $appt_id = 'fpn/appt-id/' . date('Y-m-d') . time();

            insert($appt_id, $sender_id, $title, $description, $slot, $booking_date);  
        }  
 
        

    } 



    function insert($appt_id, $sender_id, $title, $description, $slot, $booking_date) {


        global $conn;
        
        
        $query = mysqli_query($conn, "INSERT INTO appt_table (appt_id, senders_id, appt_title, appt_desc, slot, booking_date) VALUES ('$appt_id', '$sender_id', '$title', '$description', '$slot', '$booking_date')");

        if ($query) {

            $query2 = mysqli_query($conn, "UPDATE appt_slip SET status = 'unavailable' WHERE slip_id = '$slot'");

            if ($query2) {
                header('Location: ' . SITEURL . 'user-dashboard/outgoing.php');
            }

        } else {
            echo "Error in insertion";
        }
    }



    if (isset($_POST['send_appt'])) {
        sendAppt();
    }

    

?>

