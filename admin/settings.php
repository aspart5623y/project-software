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
                        <form novalidate>
                            <div class="row shadow justify-content-center bg-white">
                                <div class="col-lg-5 rounded d-flex flex-column mb-5">
                                    <div class="dashboard-image mb-3 mx-auto">
                                        <img src="../assets/avatar/3.jpeg" height="" width="200px" class="img-fluid rounded-circle shadow" alt="">
                                    </div>

                                    <!-- *** Dashboard Buttons *** -->
                                    <div class="dashboard-buttons d-flex justify-content-center">
                                        

                                        <!-- Change Profile Picture Button -->
                                        <div class="button d-inline-block mx-2">
                                            <div class="change-avatar shadow d-flex rounded-circle" style=" height: 45px; width: 45px;">
                                                <div class="change-photo-btn btn btn-light position-relative">
                                                    <span>
                                                        <i class="fas fa-file-image mt-1" style="font-size: 27px;"></i>
                                                    </span>
                                                    <input type="file" style="width: 45px; height: 45px; position: absolute; opacity: 0; top: 0px; left: 0px;">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Settings Button -->
                                        <button type="submit" class="btn btn-primary px-4 mx-2" style="height: 45px;">
                                            <i class="fas fa-user-check"></i>
                                            Update Changes
                                        </button>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="dashboard-content p-1 p-md-5">
                                        <div class="dashboard-info">
                                            <!-- First Name Input Box -->
                                            <div class="input-group my-3">
                                                <!-- First Name icon container -->
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-user-circle"></i>
                                                    </span>
                                                </div>
                                                <!-- Main input -->
                                                <input type="text" class="form-control" value="<?php echo $row['full_name'] ?>" required>
                                                <!-- First Name label -->
                                                <label for="First Name">Fullname</label>
                                            </div>


                                            <!-- Email Input Box -->
                                            <div class="input-group my-3">
                                                <!-- Email icon container -->
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-envelope-open"></i>
                                                    </span>
                                                </div>
                                                <!-- Main input -->
                                                <input type="text" class="form-control" value="<?php echo $row['email'] ?>" required>
                                                <!-- Email label -->
                                                <label for="E-mail">E-mail</label>
                                            </div>

                                            <!-- Phone Number Input Box -->
                                            <div class="input-group my-3">
                                                <!-- Phone Number icon container -->
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-phone-alt"></i>
                                                    </span>
                                                </div>
                                                <!-- Main input -->
                                                <input type="text" class="form-control" value="<?php echo $row['phone'] ?>" required>
                                                <!-- Phone Number label -->
                                                <label for="Phone Number">Phone Number</label>
                                            </div>

                                            <a href="<?php echo SITEURL ?>admin/password-setting.php" class="btn btn-light border px-5 py-2">Change your password</a>
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
    <script src="<?php echo SITEURL ?>admin/js/script.js"></script>
    
</body>
</html>