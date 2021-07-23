<?php 
    $page = "outgoing";
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
                        <a href="<?php echo SITEURL ?>admin/outgoing.php" class="text-primary">
                            Outgoing Appointment
                        </a>
                    </li>
                </ul>
            </div>


            
            <section class="incoming-appointment">
                <div class="container">
                    <div class="hint mb-5">
                        <p class="hint-text text-muted">
                            This is a list of appointments you sent to your users.
                            Click on <u>view appointment</u> to open the appointment details.
                            The user would recieve your appointment once you have booked an appointment. Click the button below to book a new appointment with the Head of Department.
                        </p>
                        <a href="<?php echo SITEURL ?>admin/new-appointment.php" class="btn alert-primary">Book new appointment</a>
                    </div>
                    <div class="appointment-table bg-white">
                        <div class="table-responsive">
                            <table id="incomingTable" style="width: 100%;" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Reciever's Name</th>
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
                                        <!-- Recievers name -->
                                        <td>WIlliams Stud</td>
                                        <!-- appointment date -->
                                        <td>1 / 14 / 2021</td>
                                        <!-- appointment time -->
                                        <td>8 : 00 AM - 9 : 00 AM</td>
                                        <!-- appointment title -->
                                        <td>Meeting</td>
                                        <!-- appointment status -->
                                        <td><a href="javascript:void(0)" class="btn alert-warning">Pending</a></td>
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
                            <h6 class="font-weight-bold">Booked Appointment</h6>
                            <!-- close modal button -->
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Appointment Modal Body -->
                        <div class="modal-body">
                            <p class="text-muted text-center">Appointment you sent to the Head of Department</p>

                            

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
                            
                            <!-- Pending Action -->
                            <div class="appointment-action" id="pendingApptAct">
                                <!-- New Appointment Status -->
                                <div class="appointment-status my-4">
                                    <a href="javascript:void(0)" class="btn d-block alert-warning">Pending</a>
                                </div>
                            </div>

                            <!-- Confirmed Appointment Action -->
                            <div class="appointment-action" id="confirmedApptAct">
                                <!-- Confirmed Appointment Status -->
                                <div class="appointment-status my-4">
                                    <a href="javascript:void(0)" class="btn d-block alert-success">Confirmed</a>
                                </div>
                            </div>

                            <!-- Rejected Appointment Action -->
                            <div class="appointment-action active" id="rejectedApptAct">
                                <!-- Rejected Appointment Status -->
                                <div class="appointment-status my-4">
                                    <a href="javascript:void(0)" class="btn d-block alert-danger">Rejected</a>
                                </div>
                                <p class="reason text-muted">
                                    I would be in accra on the 5th for a wedding
                                </p>
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
            <!-- External JS Script Link -->
        </section>
    </section>





















    <?php include 'components/footer-link.php' ?>
    <!-- External JS Script Link -->
    <script src="<?php echo SITEURL ?>admin/js/script.js"></script>
    
</body>
</html>