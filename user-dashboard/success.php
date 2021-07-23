<?php 
    $page = "new";
    include '../php/config.php'; 
    include "components/header-link.php";
?>

<body>

    
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
                </ul>
            </div>

            
            <!-- 
                ========================  B O O K I N G     S E C T I O N  =======================
            -->
            <section class="booking-section">
                <div class="container">
                    <div class="booking-form">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 m-3 m-sm-0 shadow bg-white success">
                                <div class="can text-center">
                                    <h2 class="font-weight-bold">
                                        Your appointment has been booked successfully!!
                                    </h2>
                                    <div class="booking-success-icon text-success">
                                        <i class="far fa-check-circle"></i>
                                    </div>
                                    <a href="outgoing.php" class="btn btn-light px-5 py-3">Done</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        



            <!-- 
                ========================  F O O T E R  =======================
            -->
            <footer class="bg-dark py-5">
                <div class="container text-white text-center">
                    <!-- footer items container -->
                    <div class="d-flex justify-content-center">
                        <!-- item 1 -->
                        <div class="px-2 d-flex align-items-center">
                            <img src="../assets/bg/index.jpg" width="100px" class="img-fluid rounded-circle" alt="">
                        </div>
                        <!-- item 2 -->
                        <div class="px-2">
                            <img src="../assets/bg/sias.jpg" width="100px" class="img-fluid rounded-circle" alt="">
                        </div>
                        <!-- item 3 -->
                        <div class="px-2">
                            <img src="../assets/bg/NACOSS-logo.png" width="100px" class="img-fluid" alt="">
                        </div>
                    </div>

                    <!-- main footer with date -->
                    <div class="footer mt-5">
                        Copyright &copy; <span id="footerYear"></span>. All rights reserved.
                    </div>
                </div>
            </footer>
        </section>
    </section>





















    <!-- jQuery Link -->
    <script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
    <!-- Popper JS Link -->
    <script src="../vendor/popper.js/umd/popper.min.js"></script>
    <!-- Bootstrap JS Link -->
    <script src="../vendor/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <!-- AOS JS Link -->
    <script src="../vendor/aos-master/aos-master/dist/aos.js"></script>
    <!-- External JS Script Link -->
    <script src="../admin/admin-js/new-appt.js"></script>
    
</body>
</html>