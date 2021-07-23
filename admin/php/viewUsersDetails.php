<?php

    include 'db_connect.php'; 
    include 'config.php';
    session_start(); 


    function viewUsersDetails() {
        global $conn;

        $usersID = $_POST['users_id'];
        $value = "";
        
        $query = mysqli_query($conn, "SELECT * FROM users_table WHERE user_id_num = '$usersID'");


        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['image'] != '') {
                $src = $row['image'];
            } else {
                $src = SITEURL . '/assets/avatar/3.jpeg';
            }

            $value .= '
                <!-- Item -->
                <div>

                    <div class="text-center my-5">
                        <img src="'.$src.'" width="100px" height="100px" alt="" class="img-fluid rounded-circle">
                    </div>

                    <!-- Appointment title -->
                    <div class="appointment-title">
                        <!-- label -->
                        <h6 class="font-weight-bold d-inline-block">Fullname:</h6> &nbsp;
                        <!-- item -->
                        <p class="text-muted d-inline-block">'. $row['full_name'] .'</p>
                    </div>

                    <!-- Appointment time -->
                    <div class="appointment-time">
                        <!-- label -->
                        <h6 class="font-weight-bold d-inline-block">Email:</h6> &nbsp;
                        <!-- item -->
                        <p class="text-muted d-inline-block">'. $row['email'] .'</p>
                    </div>

                    <!-- Appointment date -->
                    <div class="appointment-date">
                        <!-- label -->
                        <h6 class="font-weight-bold d-inline-block">Phone:</h6> &nbsp;
                        <!-- item -->
                        <p class="text-muted d-inline-block">'. $row['phone'] .'</p>
                    </div>

                </div>
            ';
        }


        echo $value;

    }



viewUsersDetails();


?>


