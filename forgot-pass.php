<?php 
    $page = "home";
    include 'php/config.php'; 
    include 'components/header-link.php'; 
?>


<!-- External CSS Stylesheet Link -->
<link rel="stylesheet" href="./css/style.css">




<body class="fp-page">
    
    <!-- 
        ========================  P R E L O A D E R  =======================
    -->
    <?php include 'components/preloader.php'; ?>


    <!-- 
        ========================  N A V B A R  =======================
    -->
    <?php include 'components/navbar.php'; ?>



  



    <!-- 
        ========================  F O R G O T      P A S S W O R D  =======================
    -->
    <section class="forgot">
        <div class="container">
            <div class="dashboard">
                <form action="login.html" novalidate>
                    <div class="row shadow justify-content-center bg-white">

                        <div class="col-lg-5 rounded d-flex flex-column">
                            <div class="dashboard-image mb-3 mx-auto">
                                <img src="./assets/avatar/3.jpeg" height="" width="200px" class="img-fluid rounded-circle shadow" alt="">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="dashboard-content p-1">
                                <div class="auth active email-auth">
                                    <!-- Hint -->
                                    <div class="alert alert-secondary mb-5">
                                        Enter your email
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
                                        <input type="text" class="form-control" required>
                                        <!-- Email label -->
                                        <label for="E-mail">E-mail</label>
                                    </div>

                                    <button type="button" class="btn btn-primary px-5 py-3">Proceed</button>

                                    <a href="javascript:void(0)" class="btn btn-light px-5 py-3">Cancel</a>
                                </div>

                                <div class="auth code-auth">
                                    <!-- Hint -->
                                    <div class="alert alert-secondary mb-5">
                                        Enter code sent to your email
                                    </div>

                                    <!-- code Input Box -->
                                    <div class="input-group my-3">
                                        <!-- code icon container -->
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-envelope-open"></i>
                                            </span>
                                        </div>
                                        <!-- Main input -->
                                        <input type="text" class="form-control" required>
                                        <!-- code label -->
                                        <label for="code">Code</label>
                                    </div>

                                    <button type="button" class="btn btn-primary px-5 py-3">Confirm</button>

                                    <a href="javascript:void(0)" class="btn btn-light px-5 py-3">Back</a>
                                </div>

                                <div class="auth password-auth">
                                    <!-- Hint -->
                                    <div class="alert alert-secondary mb-5">
                                        Enter your new password
                                    </div>

                                    <!-- Password Input Box -->
                                    <div class="input-group my-3">
                                        <!-- Password icon container -->
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-key"></i>
                                            </span>
                                        </div>
                                        <!-- Main Input -->
                                        <input type="password" id="myPass" class="form-control" required>
                                        <!-- Password Visibility Button -->
                                        <div class="input-group-append">
                                            <button type="button" id="passTog" class="btn">
                                                <i class="far fa-eye"></i>
                                                <i class="far fa-eye-slash"></i>
                                            </button>
                                        </div>
                                        <!-- Password Label -->
                                        <label for="password">Password</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary px-5 py-3">Update</button>

                                    <a href="javascript:void(0)" class="btn btn-light px-5 py-3">Back</a>
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
    <?php include 'components/footer.php'; ?>
    <?php include 'components/footer-link.php'; ?>
    <!-- External JS Script Link -->
    <script src="./js/script.js"></script>
    <script src="./js/forgot-pass.js"></script>
</body>
</html>