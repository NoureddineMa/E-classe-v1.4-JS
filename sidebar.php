<div class="container-fluid  bg-light overflow-hidden">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bgc ">
            
            <div class="d-flex flex-column  align-items-center px-3 pt-2 text-white min-vh-100 ps-5 ">
            <a href="Dashboard.php" class="pb-sm-3 mb-md-1 me-md-auto text-black text-decoration-none ">
                    <span class=" fs-6 py-0 me-2"></span> <h3 class=" fw-bolder text-dark  ps-2 " style="font-size: 25px;">E-classe</h3>
                </a>
                <div class="d-flex flex-column align-items-center ">
                <img src="assets/img/admin.png" alt="hugenerd" width="70" height="70" class="rounded-circle  mt-1">
                <?php if(isset($_SESSION['name']) && isset($_SESSION['email'])){ ?>
                <h4 class="text-dark mt-3 h6 " style="font-size: 14px;"> <b> <?php echo $_SESSION['name']; ?> </b></h4>
                <?php }?>
                <p class="text-info" style="font-size: 11px;">Admin</p>
                </div>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item  " style="font-size: 16px;">
                        <a href="Dashboard.php" class="btn  align-middle text-dark">
                            <i class="fal fa-home-lg-alt px-1 ic"></i> <span class="ms-1 d-none d-sm-inline mt-4  prop">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="courses.php" data-bs-toggle="collapse" class="btn  align-middle text-dark">
                            <i  class="far fa-bookmark px-1 ic " ></i> <span class="ms-1 d-none d-sm-inline  prop">Course</span> </a>
                    </li>
                    <li>
                        <a href="student.php" class="btn  align-middle  text-dark">
                            <i class="fal fa-graduation-cap ic"></i> <span class="ms-1 d-none d-sm-inline prop">Students</span></a>
                    </li>
                    <li>
                        <a href="Payment.php" data-bs-toggle="collapse" class="btn    align-middle text-dark ">
                            <i class="far fa-usd-square ic "></i> <span class="ms-1 d-none d-sm-inline prop">Payment</span></a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="collapse" class="btn  align-middle text-dark ">
                            <i class="fal fa-file-chart-line ic"></i> <span class="ms-1 d-none d-sm-inline prop">Report</span></a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="collapse" class="btn align-middle text-dark  ">
                            <i class="fal fa-sliders-v-square ic "></i> <span class="ms-1 d-none d-sm-inline prop">Settings</span></a>
                    </li>
                    
                    <li>
                        <a href="logout.php" class="btn mt-sm-4   text-dark">
                            <span class="d-none d-sm-inline px-sm-1 prop">Logout</span><i class="fal fa-sign-out-alt fs-5 ic "></i></a>
                    </li>
            </div>
        </div>