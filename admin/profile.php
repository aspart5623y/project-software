<?php 
    $page = "home";
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
            <div class="pager mt-1 bg-white shadow-sm">
                <ul class="breadcrumb bg-transparent rounded-0">
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="<?php echo SITEURL ?>admin/profile.php" class="text-primary">
                            Admin Dashboard
                        </a>
                    </li>
                </ul>
            </div>


            <!-- 
                ========================  A D M I N      D A S H B O A R D  =======================
            -->
            <section class="user-dashboard">
                <div class="container">
                    <div class="dashboard">
                        <div class="row shadow justify-content-center bg-white">
                            <div class="col-lg-5 rounded d-flex flex-column mb-5">
                                <div class="dashboard-image mb-3 mx-auto">
                                    <img src="../assets/avatar/3.jpeg" height="" width="200px" class="img-fluid rounded-circle shadow" alt="">
                                </div>

                                <!-- *** Dashboard Buttons *** -->
                                <div class="dashboard-buttons d-flex justify-content-center">
                                    <!-- Settings Button -->
                                    <a href="<?php echo SITEURL ?>admin/settings.php" class="btn btn-primary px-5 mx-2" style="height: 45px;">
                                        <i class="fas fa-user-cog"></i>
                                        Settings
                                    </a>
                                
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dashboard-content p-1 p-md-5">
                                    <div class="dashboard-info">


                                        <!-- dashboard name -->
                                        <div class="dashboard-name">
                                            <!-- tag -->
                                            <h6 class="font-weight-bold d-inline-block">Name:</h6> &nbsp;
                                            <!-- info -->
                                            <p class="text-muted d-inline-block"><?php echo $row['full_name'] ?></p>
                                        </div>
                                        <!-- dashboard mail address -->
                                        <div class="dashboard-email">
                                            <!-- tag -->
                                            <h6 class="font-weight-bold d-inline-block">Email:</h6> &nbsp;
                                            <!-- info -->
                                            <p class="text-muted d-inline-block"><?php echo $row['email'] ?></p>
                                        </div>
                                        <!-- dashboard phone -->
                                        <div class="dashboard-phone">
                                            <!-- tag -->
                                            <h6 class="font-weight-bold d-inline-block">Phone:</h6> &nbsp;
                                            <!-- info -->
                                            <p class="text-muted d-inline-block"><?php echo $row['phone'] ?></p>
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
            <?php include './components/footer.php'; ?>
        </section>
    </section>



















    <?php include 'components/footer-link.php' ?>

    <!-- External JS Script Link -->
    <script src="<?php echo SITEURL ?>admin/js/script.js"></script>
    
</body>
</html>