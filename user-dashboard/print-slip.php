<?php 
    include '../php/config.php'; 
    include "components/header-link.php";
?>
<link rel="stylesheet" media="print" href="../user-dashboard/css/print.css">
<body>

    <?php 

        if (isset($_GET['id'])) {
            $appt_id = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * FROM appt_table WHERE appt_id = '$appt_id'");

            $item = mysqli_fetch_assoc($query);

            $slot = $item['slot'];

            $query2 = mysqli_query($conn, "SELECT * FROM appt_slip WHERE slip_id = '$slot'");

            $slip = mysqli_fetch_assoc($query2);


        }
    
    ?>
    <div class="container">
        <div class="my-3">
            <div class="col-lg-7 mx-auto">
                <div class="card border-0 rounded shadow-sm">
                    <!-- slip -->
                    <div class="card-body px-5">
                        <!-- company logo -->
                        <a href="javascript:void(0)" class="navbar-brand">
                            <!-- sidebar brand image -->
                            <img src="<?php echo SITEURL ?>assets/img/logo.png" class="img-fluid" width="150px" alt="logo">
                        </a>
                        <!-- subtite -->
                        <p class="lead mb-4 mb-md-5 text-center">Appointment Slip</p>

                        <!-- vehicle details -->
                        <p class="my-2"><b>Appointment Title:</b> <?php echo $item['appt_title'] ?></p>
                        <p class="my-2"><b>Appointment Date:</b> <?php echo $slip['slip_date'] ?></p>
                        <p class="my-2"><b>Appointment Time:</b> <?php echo $slip['slip_time'] ?></p>
                        
                        <!-- QR Code -->
                        <img src="<?php echo SITEURL ?>vendor/qrcode.php?text=<?php echo $item['appt_id'] ?>&size=200&padding=30" alt="qrcode" style="float: right;" class="img-fluid d-block mx-auto my-5">
                    </div>
                    <!-- card footer -->
                    <div class="card-footer noprint">
                        <a href="javascript:window.print()" class="btn btn-primary px-5 py-2 float-right">Print Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'components/footer-link.php' ?>
</body>
</html>