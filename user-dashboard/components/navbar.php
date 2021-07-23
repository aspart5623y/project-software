<nav class="navbar navbar-light bg-white position-relative shadow-sm fixed-top">
    <div class="container-fluid">
        <div class="d-flex flex-row w-100">
            <!--Sidebar Toggle Button-->
            <button type="button" id="navbar-toggler" class="btn mr-1 mr-sm-3 mr-md-4">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Brand -->
            <a href="javascript:void(0)" class="navbar-brand m-auto">
                <img src="../assets/img/logo.png" width="160px" class="img-fluid" alt="">
            </a>

            <!-- M E N U -->
            <div class="navbar-collapse">
                <!-- Menu List -->
                <ul class="navbar-nav ml-auto d-flex flex-row justify-content-end">
                    <!-- notification -->
                    <li class="nav-item notification-dropdown dropdown position-relative mx-2">
                        <a href="#" class="nav-link p-3" id="notification" data-toggle="dropdown">
                            <i class="far fa-bell" style="font-size: 20px;"></i>
                            <span class="dot rounded-circle active" style="width: 7px; height: 7px; background-color: red;"></span>
                        </a>

                        <div class="dropdown-menu position-absolute shadow-sm">
                            <!-- notification -->
                            <a href="javascript:void(0)" class="dropdown-item d-flex px-2 py-2">
                                <span class="image align-self-start">
                                    <img src="../assets/avatar/3.jpeg" class="img-fluid rounded-circle" width="40px" alt="">
                                </span>
                                <div class="ml-3">
                                    <h6 class="font-weight-bold mb-0">
                                        Ebube Ricky
                                    </h6>
                                    <p class="text-muted mb-n1">Booked new appointment</p>
                                    <span id="time"class="text-muted ">10:14am</span> |
                                    <span id="date" class="text-muted">12-02-2021</span>
                                </div>
                            </a>

                            <!-- notification -->
                            <a href="javascript:void(0)" class="dropdown-item d-flex px-2 py-2">
                                <span class="image align-self-start">
                                    <img src="../assets/avatar/3.jpeg" class="img-fluid rounded-circle" width="40px" alt="">
                                </span>
                                <div class="ml-3">
                                    <h6 class="font-weight-bold mb-0">
                                        Ebube Ricky
                                    </h6>
                                    <p class="text-muted mb-n1">Rejected your appointment</p>
                                    <span id="time"class="text-muted ">10:14am</span> |
                                    <span id="date" class="text-muted">12-02-2021</span>
                                </div>
                            </a>

                            <!-- notification -->
                            <a href="javascript:void(0)" class="dropdown-item d-flex px-2 py-2">
                                <span class="image align-self-start">
                                    <img src="../assets/avatar/3.jpeg" class="img-fluid rounded-circle" width="40px" alt="">
                                </span>
                                <div class="ml-3">
                                    <h6 class="font-weight-bold mb-0">
                                        Ebube Ricky
                                    </h6>
                                    <p class="text-muted mb-n1">Approved your appointment</p>
                                    <span id="time"class="text-muted ">10:14am</span> |
                                    <span id="date" class="text-muted">12-02-2021</span>
                                </div>
                            </a>

                            <!-- no new notification alert -->
                            <!-- <p href="javascript:void(0)" class="text-muted text-center px-2 py-2" style="font-size: 14px;">
                                You do not have any new notification
                            </p> -->
                            
                        </div>
                    </li>

                    

                    <!-- User -->
                    <li class="nav-item user-dropdown dropdown position-relative mx-2">
                        <a href="#" class="nav-link" id="user" data-toggle="dropdown">
                            <img src="../assets/avatar/3.jpeg" alt="" class="img-fluid rounded-circle" width="40px" height="40px">
                        </a>
                        <!-- User Dropdown -->
                        <div class="dropdown-menu shadow-sm position-absolute">
                            <!-- User -->
                            <a href="javascript:void(0)" class="dropdown-item px-4 py-3 border-bottom"><?php echo $full_name ?></a>
                            <!-- Profile  -->
                            <a href="<?php echo SITEURL ?>user-dashboard/profile.php" class="dropdown-item px-4 py-3">
                                <i class="far fa-user-circle" style="font-size: 18px;"></i>
                                &nbsp;
                                Profile
                            </a>
                            <!-- Resign -->
                            <a href="<?php echo SITEURL ?>" class="dropdown-item px-4 py-3">
                                <i class="fas fa-home" style="font-size: 18px;"></i>
                                &nbsp;
                                Home
                            </a>
                            <!-- Logout -->
                            <a href="javascript:void(0)" data-target="#logoutModal" data-toggle="modal" class="dropdown-item px-4 py-3 border-top">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>










<!-- 
    ========================  L O G O U T     M O D A L  =======================
-->
<div class="modal fade" id="logoutModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-body text-center">
                <h6 class="mb-4">Are you sure you want to logout?</h6>
                <form action="../php/logout.php" class="d-inline-block">
                    <button class="btn btn-primary px-5 py-2" type="submit">Yes</button>
                </form>
                <button type="button" data-dismiss="modal" class="btn btn-light px-5 py-2">No</button>
            </div>
        </div>
    </div>
</div>

















