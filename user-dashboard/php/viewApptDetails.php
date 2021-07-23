<?php

    include 'db_connect.php'; 
    include 'config.php';
    session_start(); 


    function viewApptDetails() {
        global $conn;

        $apptID = $_POST['appt_id'];
        $value = "";
        
        $query = mysqli_query($conn, "SELECT * FROM appt_table WHERE appt_id = '$apptID'");

        if (mysqli_num_rows($query) > 0) {

            while ($row = mysqli_fetch_assoc($query)) {
                $btn = '';
                $slot = $row['slot'];

                $query2 = mysqli_query($conn, "SELECT * FROM appt_slip WHERE slip_id = '$slot'");

                $slip = mysqli_fetch_assoc($query2);


                if ($row['appt_status'] == 'pending') {
                    $btn = 'alert-warning'; 

                    $status_bar = '<!-- Pending Action -->
                                    <div class="appointment-action" id="pendingApptAct">
                                        <!-- New Appointment Status -->
                                        <div class="appointment-status my-4">
                                            <a href="javascript:void(0)" class="btn d-block alert-warning">Pending</a>
                                        </div>
                                    </div>';

                } else if ($row['appt_status'] == 'rejected') {
                    $btn = 'alert-danger'; 

                    $status_bar = '
                        <!-- Rejected Appointment Action -->
                        <div class="appointment-action" id="rejectedApptAct">
                            <!-- Rejected Appointment Status -->
                            <div class="appointment-status my-4">
                                <a href="javascript:void(0)" class="btn d-block alert-danger">Rejected</a>
                            </div>
                            <p class="reason text-muted">
                                '.$row['appt_msg'].'
                            </p>
                        </div>
                    ';
                } else if ($row['appt_status'] == 'confirmed') {
                    $btn = 'alert-success'; 

                    $status_bar = '
                        <!-- Confirmed Appointment Action -->
                        <div class="appointment-action" id="confirmedApptAct">
                            <!-- Confirmed Appointment Status -->
                            <div class="appointment-status my-4">
                                <a href="javascript:void(0)" class="btn d-block alert-success">Confirmed</a>
                            </div>
                        </div>
                    ';
                }

                $value .= '
                    <!-- Item -->
                    <div>
                        <!-- Appointment title -->
                        <div class="appointment-title">
                            <!-- label -->
                            <h6 class="font-weight-bold d-inline-block">Appointment Title:</h6> &nbsp;
                            <!-- item -->
                            <p class="text-muted d-inline-block">'. $row['appt_title'] .'</p>
                        </div>

                         <!-- Appointment time -->
                        <div class="appointment-time">
                            <!-- label -->
                            <h6 class="font-weight-bold d-inline-block">Appointment Time:</h6> &nbsp;
                            <!-- item -->
                            <p class="text-muted d-inline-block">'. $slip['slip_time'] .'</p>
                        </div>

                        <!-- Appointment date -->
                        <div class="appointment-date">
                            <!-- label -->
                            <h6 class="font-weight-bold d-inline-block">Appointment Date:</h6> &nbsp;
                            <!-- item -->
                            <p class="text-muted d-inline-block">'. $slip['slip_date'] .'</p>
                        </div>

                       

                        '.$status_bar.'

                        <!-- Appointment date -->
                        <div class="appointment-date">
                            <small class="text-muted text-right d-block">Booked on '. $row['booking_date'] .'</small>
                        </div>

                    </div>
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

        // echo json_encode(['status' => 'success', 'html' => $value]);
        echo $value;

    }



viewApptDetails();


?>