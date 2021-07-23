<?php 
    $page = "users";
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
                        <a href="<?php echo SITEURL ?>admin/incoming.php" class="text-primary">
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
                                        <th></th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th></th>
                                    </tr>
                                </thead> 
                                <!-- Table Body  -->
                                <tbody id="users_table">
                                    <!-- AJAX is getting this -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>



             <!-- 
                ========================  A P P O I N T M E N T     M O D A L  =======================
            -->
            <div class="modal fade" id="UsersModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">

                        <!-- Appointment Modal Header -->
                        <div class="modal-header shadow-sm">
                            <!-- Appointment Modal Title -->
                            <h6 class="font-weight-bold">Users Details</h6>
                            <!-- close modal button -->
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Appointment Modal Body -->
                        <div class="modal-body">
                        
                            <div class="users-details"></div>

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
    <script src="<?php echo SITEURL ?>admin/js/script.js"></script>
    <script src="<?php echo SITEURL ?>admin/js/viewUsers.js"></script>

</body>
</html>