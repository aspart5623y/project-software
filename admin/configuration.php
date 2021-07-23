<?php 
    $page = "config";
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
                        <a href="<?php echo SITEURL ?>admin/configuration.php" class="text-primary">
                            Create Appointment slip
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
                        <form method="POST">

                            <div class="shadow-sm bg-white p-md-5 p-3">
                                <button type="button" class="btn btn-success py-3 px-5" data-toggle="modal" data-target="#slip"><i class="fas fa-plus" style="font-size:15px"></i> &nbsp; Add Appointment Slip</button>


                                <div class="row showSlips">
                                    <!-- Ajax is getting this -->
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









    <!-- 
        ========================  A P P T _ S L I P  =======================
    -->
    <div class="modal fade" id="slip">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="font-weight-bold">Create new slip</h6>
                </div>
                <div class="modal-body">
                    <form>
                        <p id="ErrorMsg" class="text-danger"></p>

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

                                                                    
                        <!-- start time Input Box -->
                        <div class="mb-3">
                            <p class="mb-0 ml-2">Appointment Time:</p>
                            <select class="custom-select" id="appt_time">
                                <option value="">Choose your convinient time</option>
                                <option value="12:00am">12:00am</option>
                                <option value="01:00am">01:00am</option>
                                <option value="02:00am">02:00am</option>
                                <option value="03:00am">03:00am</option>
                                <option value="04:00am">04:00am</option>
                                <option value="05:00am">05:00am</option>
                                <option value="06:00am">06:00am</option>
                                <option value="07:00am">07:00am</option>
                                <option value="08:00am">08:00am</option>
                                <option value="09:00am">09:00am</option>
                                <option value="10:00am">10:00am</option>
                                <option value="11:00am">11:00am</option>
                                <option value="12:00pm">12:00pm</option>
                                <option value="01:00pm">01:00pm</option>
                                <option value="02:00pm">02:00pm</option>
                                <option value="03:00pm">03:00pm</option>
                                <option value="04:00pm">04:00pm</option>
                                <option value="05:00pm">05:00pm</option>
                                <option value="06:00pm">06:00pm</option>
                                <option value="07:00pm">07:00pm</option>
                                <option value="08:00pm">08:00pm</option>
                                <option value="09:00pm">09:00pm</option>
                                <option value="10:00pm">10:00pm</option>
                                <option value="11:00pm">11:00pm</option>
                            </select>
                        </div>

                        
                        
                        
                        <button type="button" id="save_slip" onclick="return addSlip()" class="btn btn-primary px-5 py-3">Create Slip</button>
                    </form>
                </div>
            </div>
        </div>
    </div>









    <?php include 'components/footer-link.php' ?>

    <!-- External JS Script Link -->
    <script src="<?php echo SITEURL ?>admin/js/script.js"></script>
    <script src="<?php echo SITEURL ?>admin/js/configuration.js"></script>
    
    
</body>
</html>