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
                ========================  M A S T H E A D  =======================
            -->
            <section class="masthead">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        
                        <!-- masthead item -->
                        <div class="col-6 border-right">
                            <div class="rate-counter">
                                <div class="media mb-n3 justify-content-center">
                                    <i class="fas fa-pen text-primary" style="font-size: 30px;"></i>
                                    <div class="body ml-3">
                                        <h6 class="text-uppercase m-0">Total Appointments Sent</h6> 
                                        <p class="time text-muted">Last 7 days</p>
                                    </div>
                                </div>
                                <h1 class="counter">120</h1>
                            </div>
                        </div>

                        <!-- masthead item -->
                        <div class="col-6">
                            <div class="rate-counter">
                                <div class="media mb-n3 justify-content-center">
                                    <i class="fas fa-handshake text-primary" style="font-size: 30px;"></i>
                                    <div class="body ml-3">
                                        <h6 class="text-uppercase m-0">Total Appointments Recieved</h6> 
                                        <p class="time text-muted">Last 7 days</p>
                                    </div>
                                </div>
                                <h1 class="counter">452</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div class="container-fluid">
                <hr>
            </div>

            <!-- 
                ========================  W E L C O M E  =======================
            -->
            <section class="welcome">
                <div class="container">
                    <!-- service -->
                    <div class="col-lg-8 mx-auto p-0">
                        <div class="service text-center">
                            <!-- service text -->
                            <h3 class="font-weight-bold">
                                Welcome <?php echo $full_name ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container-fluid">
                <hr>
            </div>


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
                                The purpose of this website is to control overcrowding at the Head Of Department's office and to create conviniency in attending to anyone who intends to visit the Head Of Department's office.
                                This website was also created to ensure a properly scheduled day and to avoid any inconvinienvy and unnecessary replanning of the day's event at the Head of Department's Ofiice.
                            </p>
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
    
    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 100,
                time: 2000
            });
        });
    </script>
</body>
</html>