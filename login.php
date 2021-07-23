<?php 
    $page = "login";
    include 'php/config.php'; 
    include 'components/header-link.php'; 
?>

<!-- External CSS Stylesheet Link -->
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/auth.css">




<body class="login-page">

    <!-- 
        ========================  P R E L O A D E R  =======================
    -->
    <?php include 'components/preloader.php'; ?>



    <!-- 
        ========================  N A V B A R  =======================
    -->
    <?php include 'components/navbar.php'; ?>

    

    <!-- Body -->
    <div class="auth-body">
        <div class="container p-0">
            <div class="col-lg-6 col-md-10 m-auto">
                <!-- Main Authentication Body -->
                <div class="auth">
                    <!-- Yellow Background -->
                    <div class="auth-bg bg-primary shadow"></div>
                    <!-- Main Container -->
                    <div class="auth-container shadow">
                        <!-- Auth THeader -->
                        <div class="auth-header my-5 text-center">
                            <h3 class="auth-title font-weight-bold">
                                Get Started
                            </h3>
                            <p class="text-muted">
                                Get Started with our site and manage appointments with the Head of Department
                            </p>
                        </div>
                        <!-- Maine Auth Form -->
                        <form class="login-form" novalidate>
                            <!-- error message display box -->
                            <div class="alert alert-danger text-center" style="display:none;" id="error-box"></div>


                            <!-- Email Input Box -->
                            <div class="input-group my-3">
                                <!-- Email icon container -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-envelope-open"></i>
                                    </span>
                                </div>
                                <!-- Main input -->
                                <input type="text" id="email" class="form-control" required>
                                <!-- Email label -->
                                <label for="E-mail">E-mail</label>
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

                            <input type="hidden" id="book" value="<?php echo $_GET['book']; ?>">

                            <!-- Login Button -->
                            <button type="button" onclick="return login()" class="btn btn-primary w-100 py-3 my-3">Get Started</button>



                            <!-- Other Links -->
                            <div class="text-center">
                                <small class="text-muted">Do not have an account yet?</small> <a href="<?php echo SITEURL ?>register.php" class="text-primary">Create an account!</a>
                                <br>
                                <a href="<?php echo SITEURL ?>forgot-pass.php" class="text-primary">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- loader -->
    <?php include './components/loader.php'?>











    <!-- 
        ========================  F O O T E R  =======================
    -->
    <?php include 'components/footer-link.php'; ?>
    <!-- External JS Script Link -->
    <script src="./js/auth.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/form-submission.js"></script>

</body>
</html>



