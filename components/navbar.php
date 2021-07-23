
<!-- 
    ========================  N A V B A R  =======================
-->
<nav class="navbar navbar-light bg-white navbar-expand-lg shadow-sm fixed-top">
    <div class="container">
        <!-- Navbar Brand -->
        <a href="javascript:void(0)" class="navbar-brand">
            <img src="./assets/img/logo.png" width="120px" class="img-fluid" alt="">
        </a>

        <!--Sidebar Toggle Button-->
        <button type="button" class="navbar-toggler border-0">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="sidebar-overlay"></div>

        <!-- M E N U -->
        <div class="navbar-collapse">

            <!--Sidebar Toggle Button-->
            <button type="button" class="sidebar-toggler d-block d-lg-none btn border-0">
                <span>&times;</span>
            </button>

            <!-- Menu List -->
            <ul class="navbar-nav ml-auto">
                <!-- Home -->
                <li class="nav-item">
                    <a href="<?php echo SITEURL ?>" class="nav-link p-3 <?php if ($page == 'home') {echo 'active';} ?>">
                        Home
                    </a>
                </li>

 
                <?php 
                    session_start();
                    if (isset($_SESSION['user_id'])) {
                        ?>
                            <!-- Dashboard -->
                            <li class="nav-item">
                                <a href="<?php echo SITEURL; if ($_SESSION['user_type'] == 'user') {echo 'user-dashboard';} else {echo 'admin';} ?>" class="nav-link p-3">
                                    Dashboard
                                </a>
                            </li>
                        <?php
                    } else {
                        ?>

                            <!-- Get Started -->
                            <li class="nav-item">
                                <a href="<?php echo SITEURL ?>login.php" class="nav-link p-3 <?php if ($page == 'login') {echo 'active';} ?>">
                                    Get Started
                                </a>
                            </li>


                            <!-- Create an account -->
                            <li class="nav-item">
                                <a href="<?php echo SITEURL ?>register.php" class="nav-link p-3 <?php if ($page == 'register') {echo 'active';} ?>">
                                    Create an account
                                </a>
                            </li>

                        <?php
                    }
                
                ?>

            </ul>
        </div>
        
    </div>
</nav>














    