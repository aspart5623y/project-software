<?php 
    $page = "new";
    include '../php/config.php'; 
    include "components/header-link.php";
    ob_start();
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
                        <a href="<?php echo SITEURL ?>user-dashboard/new-appointment.php" class="text-primary">
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
                                        Book a new appointment with the Head of Department!
                                    </h2>
                                    <p class="text-muted">
                                        Fill in the title and description of your appointment with the user!
                                    </p>
                                </div>


                                <form class="w-100" id="news" method="POST" novalidate>

                                    <?php 

                                        include './php/sendAppt.php';
                                    
                                    ?>

                                    <div class="alert alert-danger error-msg" style="display: <?php 
                                            if (isset($_SESSION['error'])) {
                                                echo 'block';
                                            } else {
                                                echo 'none';
                                            }
                                        ?>;">
                                        <?php 
                                            if (isset($_SESSION['error'])) {
                                                echo $_SESSION['error'];
                                                unset($_SESSION['error']);
                                            }
                                        ?>
                                    </div>

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
                                            <input type="text" id="title" name="title" class="form-control" value="<?php echo $title ?>" required>
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
                                            <input type="text" id="description" name="description" class="form-control" value="<?php echo $description ?>" required>
                                            <!-- Description label -->
                                            <label for="Description">Description</label>
                                        </div>

                                        <!-- Book Appointment Button -->
                                        <button type="button" class="btn btn-primary w-100 py-3 my-3">Proceed</button>
                                    </div>

                                   

                                    <div class="new new2">
                                        <h5 class="font-weight-bold mb-4">Appointment-slot</h5>
                                                                                
                                        <!-- start time Input Box -->
                                        <div class="mb-3">
                                            <p class="mb-0 ml-2">What time works best for you?</p>

                                            <div class="row slider mt-4 px-2">
                                                <!-- ajax is running this -->
                                                <?php 

                                                    include './components/slot.php';

                                                    $value = "";
       
                                                    $query3 = mysqli_query($conn, "SELECT * FROM appt_slip WHERE status = 'available' ORDER BY slip_date DESC");

                                                    if (mysqli_num_rows($query3) > 0) {

                                                        while ($slip = mysqli_fetch_assoc($query3)) {

                                                            slot($slip['slip_date'], $slip['slip_time'], $slip['slip_id']);

                                                        } 

                                                    } else {
                                                        $value .= '
                                                            <p class="text-muted">There is no time slot!</p>
                                                        ';
                                                    }

                                                    echo $value;
                                                
                                                ?>
                                            </div>


                                        </div>


                                        <!-- Book Appointment Button -->
                                        <button type="submit" name="send_appt" class="btn btn-primary w-100 py-3 my-3">Book Appointment</button>

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
    <!-- <script src="<?php echo SITEURL ?>user-dashboard/js/show-slots.js"></script> -->
    <?php ob_flush(); ?>
    
    
    
</body>
</html>