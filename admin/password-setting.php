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
                        <a href="<?php echo SITEURL ?>admin/settings.php" class="text-primary">
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
                        <form action="<?php echo SITEURL ?>admin/profile.php" novalidate>
                            <div class="row shadow justify-content-center bg-white">
                                <div class="col-lg-5 rounded d-flex flex-column">
                                    <div class="dashboard-image mb-3 mx-auto">
                                        <img src="../assets/avatar/3.jpeg" height="" width="200px" class="img-fluid rounded-circle shadow" alt="">
                                    </div>

                                    <!-- *** Dashboard Buttons *** -->
                                    <div class="dashboard-buttons d-flex justify-content-center">
                                        
                                        <!-- Settings Button -->
                                        <button type="submit" class="btn btn-primary px-4 mx-2" style="height: 45px;">
                                            <i class="fas fa-user-check"></i>
                                            Update Changes
                                        </button>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="dashboard-content p-1">
                                        <div class="dashboard-info">
                                            <!-- Old Password Input Box -->
                                            <div class="input-group my-3">
                                                <!-- Password icon container -->
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-key"></i>
                                                    </span>
                                                </div>
                                                <!-- Main Input -->
                                                <input type="password" class="form-control myPass" required>
                                                <!-- Password Label -->
                                                <label for="password">Old Password</label>
                                            </div>


                                            <!-- New Password Input Box -->
                                            <div class="input-group my-3">
                                                <!-- Password icon container -->
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-key"></i>
                                                    </span>
                                                </div>
                                                <!-- Main Input -->
                                                <input type="password" class="form-control myPass" required>
                                                <!-- Password Label -->
                                                <label for="password">New Password</label>
                                            </div>


                                            <!-- Confirm Password Input Box -->
                                            <div class="input-group my-3">
                                                <!-- Password icon container -->
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-key"></i>
                                                    </span>
                                                </div>
                                                <!-- Main Input -->
                                                <input type="password" class="form-control myPass" required>
                                                <!-- Password Label -->
                                                <label for="password">Confirm Password</label>
                                            </div>

                                            <!-- Password Visibility Button -->
                                            <button type="button" id="passTog" class="btn border p-2 float-right">
                                                <i class="far fa-eye"> Show Password</i>
                                                <i class="far fa-eye-slash"> Hide Password</i>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script src="<?php echo SITEURL ?>admin/js/settings.js"></script>
    
</body>
</html>