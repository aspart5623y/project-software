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
                    $status_bar = ' <!-- New Appointment Action -->
                                    <div class="appointment-action active" id="newApptAct">
                                        <!-- New Appointment Status -->
                                        <div class="appointment-status my-4">
                                            <a href="javascript:void(0)" class="btn d-block alert-primary">New Appointment</a>
                                        </div>
                                    
                                        <!-- new appointment buttons -->
                                        <div class="appointment-buttons my-4 text-center">
                                            <!-- Confirm Button -->
                                            <button type="button" data-id="'.$row['appt_id'].'" id="confirmAppt" class="btn alert-success px-5 py-2">Confirm</button>                        
                                            <!-- Reject Button -->
                                            <button type="button" class="btn showMsgBtn alert-danger px-5 py-2">Reject</button>
                                            <!-- Rejected Form -->
                                            <form class="mt-5 text-right rejected-form">
                                                <div class="input-group my-3">
                                                    <textarea id="reject_msg" class="form-control" style="padding-left: 20px !important; padding-right: 20px !important;" rows="1"></textarea>
                                                    <label for="">State your reason</label>
                                                </div>

                                                <button type="button" data-id="'.$row['appt_id'].'" id="rejectApptBtn" class="btn border btn-light px-5 py-2">Send</button>
                                        
                                            </form>
                                        </div>
                                    </div>';

                } else if ($row['appt_status'] == 'rejected') {
                    $status_bar = '
                        <!-- Rejected Appointment Action -->
                        <div class="appointment-action" id="rejectedApptAct">
                            <!-- Rejected Appointment Status -->
                            <div class="appointment-status my-4">
                                <a href="javascript:void(0)" class="btn d-block alert-danger">Rejected</a>
                            </div>
                        </div>
                    ';
                } else if ($row['appt_status'] == 'confirmed') {
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


<!-- appointment button js file -->
<script src="../admin/js/apptButtons.js"></script>