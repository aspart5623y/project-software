<?php 

    include 'db_connect.php'; 
    include 'config.php';

    session_start();


    function viewAppt() {
        global $conn;

        $user_id = $_SESSION['user_id'];

        $value = "";
        $sn = 1;
        $query = mysqli_query($conn, "SELECT * FROM appt_table ORDER BY booking_date DESC ");

        if (mysqli_num_rows($query) > 0) {

            while ($row = mysqli_fetch_assoc($query)) {
                $btn = $text = '';
                if ($row['appt_status'] == 'pending') {
                    $btn = 'alert-primary'; 
                    $text = 'New Appointment';
                } else if ($row['appt_status'] == 'rejected') {
                    $btn = 'alert-danger'; 
                    $text = 'Rejected';
                } else if ($row['appt_status'] == 'confirmed') {
                    $btn = 'alert-success'; 
                    $text = 'Confirmed';
                }

                $sender = $row['senders_id'];

                $query2 = mysqli_query($conn, "SELECT * FROM users_table WHERE user_id_num = '$sender'");

                $sender_name = mysqli_fetch_assoc($query2);



                $value .= '
                    <!-- Item -->
                    <tr>
                        <!-- serial number -->
                        <td>'.$sn++.'</td>
                        <!-- Sender\'s name -->
                        <td>'.$sender_name['full_name'].'</td>
                        <!-- appointment date -->
                        <td>'.$row['slot'].'</td>
                        
                        <!-- appointment title -->
                        <td>'.$row['appt_title'].'</td>

                        <!-- appointment time -->
                        <td><a href="javascript:void(0)" class="btn '.$btn.'">'.$text.'</a></td>
                        
                        <!-- open button -->
                        <td><a href="javascript:void(0)" data-id="'.$row['appt_id'].'" class="btn alert-secondary btn-details">View Appointment</a></td>
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

        echo $value;
        // echo json_encode(['status' => 'success', 'html' => $value]);

    }
    



    viewAppt();

?>



