<?php 

    include 'db_connect.php'; 
    include 'config.php';
    include '../components/slot.php';


    // session_start();


    function viewSlip() {
        global $conn;

        // $user_id = $_SESSION['user_id'];

        $value = "";
       
        $query = mysqli_query($conn, "SELECT * FROM appt_slip ORDER BY slip_date DESC");

        if (mysqli_num_rows($query) > 0) {

            while ($slip = mysqli_fetch_assoc($query)) {

                slot($slip['slip_date'], $slip['slip_time'], $slip['slip_id']);

            }

        } else {
            $value .= '
                <p class="text-muted">There is no time slot!</p>
            ';
        }

        echo $value;

    }
    



    viewSlip();

?>




