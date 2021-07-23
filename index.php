<?php 
    $page = "home";
    include 'php/config.php'; 
    include 'components/header-link.php'; 
?>


<!-- External CSS Stylesheet Link -->
<link rel="stylesheet" href="./css/style.css">



<body class="index-page">
    
    <!-- 
        ========================  P R E L O A D E R  =======================
    -->
    <?php include 'components/preloader.php'; ?>



    <!-- 
        ========================  N A V B A R  =======================
    -->
    <?php include 'components/navbar.php'; ?>




    <!-- 
        ========================  M A S T H E A D  =======================
    -->
     <section class="masthead">
        <div class="masthead-overlay d-block d-md-none"></div>
        <div class="container">
            <div class="masthead-content">
                <div class="row">
                    <div class="col-md-6 order-md-1 d-none d-md-inline-flex">
                        <div class="masthead-item">
                            <img src="./assets/bg/office png.png" class="img-fluid" width="400px" alt="" style="filter: drop-shadow(2px 4px 4px #41404080);">
                        </div>
                    </div>
                    <div class="col-md-6 order-md-0 d-flex align-items-center">
                        <div class="masthead-item">
                            <h1 class="font-weight-bold">Book an Appointment with The HOD of Computer Science Now!</h1>
                            <h3 class="text-muted">· NACOSS ·</h3>
                            <?php 
                                if (isset($_SESSION['user_id'])) {
                                    $link = 'user-dashboard/new-appointment.php';
                                } else {
                                    $link = 'login.php?book=true';
                                }
                            ?>
                            <a href="<?php echo SITEURL . $link;?>" class="btn px-5 py-3 btn-outline-primary">
                                Book Now!
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> 
    </section> 


    <!-- 
        ========================  S E R V I C E  =======================
    -->
    <section class="services">
        <div class="container">
            <!-- service -->
            <div class="col-lg-8 mx-auto p-0">
                <div class="service text-center">
                    <!-- service text -->
                    <p class="text-muted">
                        For the purpose of not meeting the Head of Department in office, meeting a crowd in front of the Head of Department's office, running into the Head of Department when he/she is leaving the office,
                        running into the Head of Department when he/she is in another meeting etc. this software was designed to help reduced dissapointments when scheduling a meeting with the Head of Department
                    </p>
                </div>
            </div>
        </div>
    </section>





    <!-- 
        ========================  F E A T U R E S  =======================
    -->
    <section class="features">
        <div class="container">
            <div class="features-header text-center">
                <h2 class="features-title font-weight-bold ">Features</h2>
                <cite class="text-muted">You can use this site to achieve the following purpose</cite>
            </div>

            <div class="row">
                <!-- feature -->
                <div class="col-lg-4 mb-4">
                    <div class="feature text-center">
                        <!-- feature title -->
                        <h5 class="font-weight-bold mb-3">Manage Appointment</h5>
                        <!-- feature text -->
                        <p class="text-muted">
                            Book and cancel Appointments with the Head of Department at his/her convinient time to avoid dissapointments.
                        </p>
                    </div>
                </div>

                <!-- feature -->
                <div class="col-lg-4 mb-4">
                    <div class="feature text-center">
                        <!-- feature title -->
                        <h5 class="font-weight-bold mb-3">View all Appointments</h5>
                        <!-- feature text -->
                        <p class="text-muted">
                            You have access to the record of all booked and cancelled appointments. You can also modify records.
                        </p>
                    </div>
                </div>

                <!-- feature -->
                <div class="col-lg-4 mb-4">
                    <div class="feature text-center">
                        <!-- feature title -->
                        <h5 class="font-weight-bold mb-3">Manage Profile</h5>
                        <!-- feature text -->
                        <p class="text-muted">
                            You can manage your profile by adding, removing, editing and updating your details. Do well to Update your correct details to help enhance efficient communication.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 
        ========================  B I L L B O A R D  =======================
    -->
    <section class="billboard">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Bill Board Content -->
                <div class="col-lg-8 text-lg-right">
                    <h1 class="font-weight-bold text-white mb-4">
                        Manage your Appointments with the Head of Department's Office
                    </h1>
                    <!-- link -->
                    <?php 
                        if (isset($_SESSION['user_id'])) {
                            $link2 = 'user-dashboard/new-appointment.php';
                        } else {
                            $link2 = 'login.php?book=true';
                        }
                    ?>
                   
                    <a href="<?php echo SITEURL .$link2; ?>" class="btn btn-primary px-5 py-3">Manage Appointments</a>
                </div>
            </div>
        </div>
    </section>


    <!-- 
        ========================  H O D     C O N T A C T  =======================
    -->
    <section class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Bill Board Content -->
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h6 class="font-weight-bold m-0">
                                Head Of Department Contact
                            </h6>
                        </div>
                        <div class="card-body">
                            <?php 
                                include 'php/db_connect.php';
                                $getInfo = mysqli_query($conn, "SELECT * FROM users_table WHERE user_type = 'admin'");

                                $row = mysqli_fetch_assoc($getInfo);

                                if (mysqli_num_rows($getInfo) > 0) {
                                    $full_name = $row['full_name'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                } else {
                                    $full_name = $email = $phone = '';
                                }
                                
                            ?>
                            <div class="row">
                                <div class="col-4">
                                    <img src="./assets/avatar/3.jpeg" class="rounded-circle d-block img-fluid mx-auto" width="100px" alt="">
                                </div>
                                <div class="col-8">
                                    <!-- name -->
                                    <div class="name">
                                        <!-- label -->
                                        <h6 class="font-weight-bold d-inline-block">Name:</h6> &nbsp;
                                        <!-- item -->
                                        <p class="text-muted d-inline-block"><?php echo $full_name; ?></p>
                                    </div>

                                    <!-- Email -->
                                    <div class="Email">
                                        <!-- label -->
                                        <h6 class="font-weight-bold d-inline-block">Email:</h6> &nbsp;
                                        <!-- item -->
                                        <p class="text-muted d-inline-block"><?php echo $email; ?></p>
                                    </div>

                                    <!-- Phone -->
                                    <div class="Phone">
                                        <!-- label -->
                                        <h6 class="font-weight-bold d-inline-block">Phone:</h6> &nbsp;
                                        <!-- item -->
                                        <p class="text-muted d-inline-block"><?php echo $phone; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


    
   
    <!-- 
        ========================  F O O T E R  =======================
    -->
    <?php include 'components/footer.php'; ?>
    <?php include 'components/footer-link.php'; ?>
    <!-- External JS Script Link -->
    <script src="./js/script.js"></script>

</body>
</html>