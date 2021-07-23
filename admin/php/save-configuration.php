<?php 

    include 'db_connect.php'; 
    include 'config.php';

    session_start();


    function createApptSlip() {
        global $conn;
        $date = $_POST['date'];
        $time = $_POST['time'];
        $currentDate = date('Y-m-d');

        $slip_id = 'fpno/slip/' . date('dmy') . time(); 


        $search = mysqli_query($conn, "SELECT * FROM appt_slip WHERE slip_time = '$time' AND slip_date = '$date'");






        if ($date < $currentDate){
            
            echo 'Enter a valid date!';

        } else {

            if (mysqli_num_rows($search) > 0) {

                echo "Time slot is taken!";

            } else {

                $query = mysqli_query($conn, "INSERT INTO appt_slip (slip_time, slip_date, slip_id) VALUES ('$time', '$date', '$slip_id')");

                if ($query) {
                    echo 'done';
                } else {
                    echo mysqli_error($conn);
                }

            }

        }




        

    }
    



    createApptSlip();

?>
