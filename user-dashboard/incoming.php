<?php 
    $page = "incoming";
    include '../php/config.php'; 
    include "components/header-link.php";
?>


<body>

    <!-- 
        ========================  P R E L O A D E R  =======================
    -->
    <?php include "components/preloader.php"; ?>

    


     <!-- 
        ========================  N A V B A R  =======================
    -->
    <?php include "components/navbar.php"; ?>
        


    





    <!-- 
        ========================  A D M I N      P A N E L  =======================
    -->
    <section class="admin-panel">
        <!-- 
            ========================  S I D E B A R  =======================
        -->
        <?php include './components/sidebar.php' ?>


        <!-- 
            ========================  M A I N      P A G E  =======================
        -->
        <section id="main-page">
            <!-- 
                ========================  B R E A D C R U M B  =======================
            -->
            <div class="pager bg-white mt-1 shadow-sm">
                <ul class="breadcrumb bg-transparent rounded-0">
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item">
                        Appointments
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="<?php echo SITEURL ?>user-dashboard/incoming.php" class="text-primary">
                            Incoming Appointment
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 
                ========================  I N C O M I N G       A P P O I N T M E N T =======================
            -->
             <section class="incoming-appointment">
                <div class="container">
                    <div class="hint mb-5">
                        <p class="hint-text text-muted">
                            This is a list of appointments sent to you from users.
                            Click on <u>view appointment</u> to open the appointment details.
                        </p>
                    </div>
                    <div class="appointment-table bg-white">
                        <div class="table-responsive">
                            <table id="incomingTable" style="width: 100%;" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment Time</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <!-- Table Body  -->
                                <tbody>

                                    <!-- Item -->
                                    <tr>
                                        <!-- serial number -->
                                        <td>1.</td>
                                        <!-- appointment date -->
                                        <td>1 / 14 / 2021</td>
                                        <!-- appointment time -->
                                        <td>8 : 00 AM - 9 : 00 AM</td>
                                        <!-- appointment title -->
                                        <td>Meeting</td>
                                        <!-- appointment status -->
                                        <td><a href="javascript:void(0)" class="btn alert-primary">New Appointment</a></td>
                                        <!-- open button -->
                                        <td><a href="javascript:void(0)" data-target="#apptModal" data-toggle="modal" class="btn alert-secondary">View Appointment</a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>



             <!-- 
                ========================  A P P O I N T M E N T     M O D A L  =======================
            -->
            <div class="modal fade" id="apptModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">

                        <!-- Appointment Modal Header -->
                        <div class="modal-header shadow-sm">
                            <!-- Appointment Modal Title -->
                            <h6 class="font-weight-bold">Incoming Appointment</h6>
                            <!-- close modal button -->
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Appointment Modal Body -->
                        <div class="modal-body">
                        
                            
                            <p class="text-muted text-center">New appointment from the Head of Department</p>

                            

                            <!-- Appointment title -->
                            <div class="appointment-title">
                                <!-- label -->
                                <h6 class="font-weight-bold d-inline-block">Appointment Title:</h6> &nbsp;
                                <!-- item -->
                                <p class="text-muted d-inline-block">Meeting</p>
                            </div>

                            <!-- Appointment time -->
                            <div class="appointment-time">
                                <!-- label -->
                                <h6 class="font-weight-bold d-inline-block">Appointment Time:</h6> &nbsp;
                                <!-- item -->
                                <p class="text-muted d-inline-block">8 : 00 AM - 9 : 00 AM</p>
                            </div>

                            <!-- Appointment date -->
                            <div class="appointment-date">
                                <!-- label -->
                                <h6 class="font-weight-bold d-inline-block">Appointment Date:</h6> &nbsp;
                                <!-- item -->
                                <p class="text-muted d-inline-block">1 / 14 / 2021</p>
                            </div>
                            
                            <!-- New Appointment Action -->
                            <div class="appointment-action active" id="newApptAct">
                                <!-- New Appointment Status -->
                                <div class="appointment-status my-4">
                                    <a href="javascript:void(0)" class="btn d-block alert-primary">New Appointment</a>
                                </div>
                            
                                <!-- new appointment buttons -->
                                <div class="appointment-buttons my-4 text-center">
                                    <!-- Confirm Button -->
                                    <button type="button" class="btn alert-success px-5 py-2">Confirm</button>                        
                                    <!-- Reject Button -->
                                    <button type="button" class="btn alert-danger px-5 py-2">Reject</button>

                                    <!-- Rejected Form -->
                                    <form class="mt-5 rejected-form">
                                        <div class="input-group my-3">
                                            <textarea name="" id="" class="form-control" style="padding-left: 20px !important; padding-right: 20px !important;" rows="1"></textarea>
                                            <label for="">State your reason</label>
                                        </div>

                                        <button type="submit" class="btn border btn-light px-5 py-2 float-right">Send</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Confirmed Appointment Action -->
                            <div class="appointment-action" id="confirmedApptAct">
                                <!-- Confirmed Appointment Status -->
                                <div class="appointment-status my-4">
                                    <a href="javascript:void(0)" class="btn d-block alert-success">Confirmed</a>
                                </div>

                                <!-- confirmed appointment buttons -->
                                <div class="appointment-buttons my-4 text-center">
                                    <!-- Confirm Button -->
                                    <button type="button" class="btn btn-success px-5 py-2">Confirmed</button>                        
                                    <!-- Reject Button -->
                                    <button type="button" class="btn alert-danger px-5 py-2" disabled>Reject</button>
                                </div>
                            </div>

                            <!-- Rejected Appointment Action -->
                            <div class="appointment-action" id="rejectedApptAct">
                                <!-- Rejected Appointment Status -->
                                <div class="appointment-status my-4">
                                    <a href="javascript:void(0)" class="btn d-block alert-danger">Rejected</a>
                                </div>

                                <!-- rejected appointment buttons -->
                                <div class="appointment-buttons my-4 text-center">
                                    <!-- Confirm Button -->
                                    <button type="button" class="btn alert-success px-5 py-2" disabled>Confirm</button>                        
                                    <!-- Reject Button -->
                                    <button type="button" class="btn btn-danger px-5 py-2">Rejected</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- Delete Appointment Button -->
                            <button class="btn border mr-auto">
                                <i class="far fa-trash-alt"></i>
                                Delete this appointment
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        



            <!-- 
                ========================  F O O T E R  =======================
            -->
            <?php include './components/footer.php'; ?>
        </section>
    </section>





















    <?php include 'components/footer-link.php' ?>
    <!-- External JS Script Link -->
    <script src="<?php echo SITEURL ?>user-dashboard/js/script.js"></script>
 
</body>
</html>