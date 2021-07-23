<?php 

    include 'db_connect.php'; 
    include 'config.php';

    session_start();


    function viewAppt() {
        global $conn;

        $user_id = $_SESSION['user_id'];

        $value = "";
        $sn = 1;
        $query = mysqli_query($conn, "SELECT * FROM appt_table WHERE senders_id = '$user_id' ORDER BY booking_date DESC ");

        if (mysqli_num_rows($query) > 0) {

            while ($row = mysqli_fetch_assoc($query)) {
                $btn = '';
                if ($row['appt_status'] == 'pending') {
                    $btn = 'alert-warning'; 
                } else if ($row['appt_status'] == 'rejected') {
                    $btn = 'alert-danger'; 
                } else if ($row['appt_status'] == 'confirmed') {
                    $btn = 'alert-success'; 
                }

                $value .= '
                    <!-- Item -->
                    <tr>
                        <!-- serial number -->
                        <td>'.$sn++.'.</td>

                        <!-- appointment date -->
                        <td>'. $row['slot'] .'</td>

                        <!-- appointment title -->
                        <td>'. $row['appt_title'] .'</td>

                        <!-- appointment status -->
                        <td><a href="javascript:void(0)" class="btn '.$btn.'">'.  $row['appt_status'] .'</a></td>

                        <!-- open button -->
                        <td><a href="javascript:void(0)" data-id="'. $row['appt_id'] .'" class="btn alert-secondary btn-details">View Appointment</a></td>
                        <td><a href="'.SITEURL.'user-dashboard/print-slip.php?id='.$row['appt_id'].'" class="btn alert-info">Print Slip</a></td>
                    </tr>
                ';
            }

        } else {
            $value .= '
                <!-- Item -->
                <tr>
                    <!-- serial number -->
                    <td colspan="6" class="text-center">There is no appointment record in the database</td>
                </tr>
            ';
        }

        echo json_encode(['status' => 'success', 'html' => $value]);

    }
    



    viewAppt();

?>



