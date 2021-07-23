<?php 
    $page = "new";
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
                        <a href="<?php echo SITEURL ?>admin/new-appointment.php" class="text-primary">
                            New Appointment
                        </a>
                    </li>
                </ul>
            </div>


            <!-- 
                ========================  B O O K I N G     S E C T I O N  =======================
            -->
            <section class="booking-section">
                <div class="container">
                    <div class="booking-form">
                            
                        <div class="row justify-content-center">
                            <div class="col-lg-7 m-3 m-sm-0 shadow bg-white">
                                <div class="text-center mb-5">
                                    <h2 class="font-weight-bold text-dark">
                                        Book a new appointment with any user now!
                                    </h2>
                                    <p class="text-muted">
                                        Fill in the title and description of your appointment with the user!
                                    </p>
                                </div>

                                <form class="w-100" id="news" novalidate>
                                    <div class="new active new1">
                                        <!-- Title Input Box -->
                                        <div class="input-group my-3">
                                            <!-- Title icon container -->
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-edit"></i>
                                                </span>
                                            </div>
                                            <!-- Main input -->
                                            <input type="text" class="form-control" required>
                                            <!-- Title label -->
                                            <label for="Title">Title</label>
                                        </div>

                                        <!-- Description Input Box -->
                                        <div class="input-group my-3">
                                            <!-- Description icon container -->
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-edit"></i>
                                                </span>
                                            </div>
                                            <!-- Main input -->
                                            <input type="text" class="form-control" required>
                                            <!-- Description label -->
                                            <label for="Description">Description</label>
                                        </div>

                                        <!-- Book Appointment Button -->
                                        <button type="button" class="btn btn-primary w-100 py-3 my-3">Proceed</button>
                                    </div>

                                    <div class="new new2">
                                        <!-- Hint -->
                                        <div class="alert alert-secondary">
                                            Choose a day from Monday till Friday
                                        </div>
                                        <!-- Date Input Box -->
                                        <p class="mb-0 ml-2">Appointment Date:</p>
                                        <div class="input-group mb-3">
                                            <!-- Date icon container -->
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar"></i>
                                                </span>
                                            </div>
                                            <!-- Main input -->
                                            <input type="date" id="apptDate" class="form-t-d" required>
                                        </div>
                                        <p id="papptDate"></p>

                                        <!-- Book Appointment Button -->
                                        <button type="button" class="btn btn-primary w-100 py-3 my-3">Next</button>
                                        <a href="javascript:void(0)" class="back-btn btn btn-light py-3 px-5">Back</a>
                                    </div>

                                    <div class="new new3">
                                        <h5 class="font-weight-bold mb-4">Appointment-time</h5>
                                        <!-- Hint -->
                                        <div class="alert alert-secondary">
                                            Choose a time from 8 : 00 AM till 2 : 00 PM
                                        </div>
                                        <div class="row mt-0">
                                            <!-- start time Input Box -->
                                            <div class="col-sm mb-3">
                                                <p class="mb-0 ml-2">Start-time:</p>
                                                <div class="input-group">
                                                    <!-- start time icon container -->
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                    <!-- Main input -->
                                                    <input type="time" value="08:00" class="form-t-d" required>
                                                </div>
                                            </div>

                                            <!-- stop time Input Box -->
                                            <div class="col-sm mb-3">
                                                <p class="mb-0 ml-2">Stop-time:</p>
                                                <div class="input-group">
                                                    <!-- stop time icon container -->
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                    <!-- Main input -->
                                                    <input type="time" value="09:00" class="form-t-d" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Book Appointment Button -->
                                        <button type="submit" class="btn btn-primary w-100 py-3 my-3">Book Appointment</button>

                                        <a href="javascript:void(0)" class="back-btn btn btn-light py-3 px-5">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        



            <!-- 
                ========================  F O O T E R  =======================
            -->
            <?php include './components/footer.php'; ?>
        </section>
    </section>





















    <?php include 'components/footer-link.php' ?>
    <!-- External JS Script Link -->
    <script src="<?php echo SITEURL ?>user-dashboard/js/new-appt.js"></script>
    
    
</body>
</html>