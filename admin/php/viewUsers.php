<?php 

    include 'db_connect.php'; 
    include 'config.php';

    // session_start();


    function viewAppt() {
        global $conn;

        // $user_id = $_SESSION['user_id'];

        $value = "";
        $sn = 1;
        $query = mysqli_query($conn, "SELECT * FROM users_table WHERE user_type = 'user'");

        if (mysqli_num_rows($query) > 0) {

            while ($row = mysqli_fetch_assoc($query)) {

                $value .= '
                    <!-- Item -->
                    <tr>
                        <!-- serial number -->
                        <td>'.$sn++.'.</td>

                        <!-- appointment date -->
                        <td></td>

                        <!-- appointment date -->
                        <td>'. $row['full_name'] .'</td>

                        <!-- appointment time -->
                        <td>'. $row['email'] .'</td>

                        <!-- appointment title -->
                        <td>'. $row['phone'] .'</td>

                        <!-- open button -->
                        <td><a href="javascript:void(0)" data-id="'. $row['user_id_num'] .'" class="btn alert-secondary btn-details">View User Details</a></td>
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

    }
    



    viewAppt();

?>




