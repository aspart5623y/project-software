<?php 
    $page = "register";
    include 'php/config.php'; 
    include 'components/header-link.php'; 
?>

<!-- External CSS Stylesheet Link -->
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/auth.css">




<body class="reg-page">

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
        <div class="container">
            <div class="auth shadow">
                <form novalidate>
                    <div class="row bg-white">
                        <div class="col-lg-4 p-0 d-none d-lg-inline-flex">
                            <div class="image-zone-overlay">
                                <h3 class="font-weight-bold text-white">Create an Account!</h3>
                                <p class="text-white font-weight-bold">
                                    and get access our site!
                                </p>
                            </div>
                            <div class="image-zone">
                                <img src="./assets/bg/book png.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10 mx-auto">
                            <div>
                                <div class="title-bar text-center mb-5 d-block d-lg-none">
                                    <h3 class="font-weight-bold">Create an Account!</h3>
                                    <p class="text-muted">
                                        Create an account now to get access our site!
                                    </p>
                                </div>

                                <!-- error message display box -->
                                <div class="alert alert-danger text-center" style="display:none;" id="error-box"></div>

                                <!-- First Name Input Box -->
                                <div class="input-group my-3">
                                    <!-- First Name icon container -->
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-user-circle"></i>
                                        </span>
                                    </div>
                                    <!-- Main input -->
                                    <input type="text" id="f_name" class="form-control" required>
                                    <!-- First Name label -->
                                    <label for="First Name">First Name</label>
                                </div>

                                <!-- Last Name Input Box -->
                                <div class="input-group my-3">
                                    <!-- Last Name icon container -->
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-user-circle"></i>
                                        </span>
                                    </div>
                                    <!-- Main input -->
                                    <input type="text" id="l_name" class="form-control" required>
                                    <!-- Last Name label -->
                                    <label for="First-Name">Last Name</label>
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
                                    <input type="text" id="email" class="form-control" required>
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
                                    <input type="text" id="phone" class="form-control" required>
                                    <!-- Phone Number label -->
                                    <label for="Phone Number">Phone Number</label>
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

                                <!-- Reg Button -->
                                <button type="button" onclick="return register()" class="btn btn-primary w-100 py-3 my-3">Create Account</button>

                                <!-- Other Links -->
                                <div class="text-center">
                                    <small class="text-muted">Already have an account?</small> <a href="<?php echo SITEURL ?>login.php" class="text-primary">Get Started!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- loader -->
    <?php include './components/loader.php'?>



    <!-- 
        ========================  F O O T E R  =======================
    -->
    <?php include 'components/footer.php'; ?>
    <?php include 'components/footer-link.php'; ?>
    <!-- External JS Script Link -->
    <script src="./js/auth.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/form-submission.js"></script>

</body>
</html>