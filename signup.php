<!DOCTYPE html>
    <?php 
    
    $title = 'SIGN IN';
    include 'head.php';   


        include 'connexion.php';
        $mail_exist = '';

        if(isset($_POST['submit']))
        {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ConfirmPassword = $_POST['cpassword'];


        $req_com = "SELECT email FROM comptes ";
        $sql_i = mysqli_query($conn,$req_com);
        $sql = mysqli_fetch_assoc($sql_i);
        if($sql['email'] != $email){
        if($password === $ConfirmPassword)
        {
        $sql = "INSERT INTO comptes ( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
         mysqli_query($conn,$sql);
         header('location:index.php');
        }
        }
          else {
          $mail_exist = 'veuillez entrer un autre mail !';
              }
        }
    ?>

    <body class="for-bg">
    <section
      class="container-fluid d-flex justify-content-center align-items-center  min-vh-100">
      <section class="rounded p-4 col-lg-4 col-md-6 col-sm-7 bg-white shadow px-5">

        <section class="row">
          <form class="form-container" method="POST" name="monformulaire" >
            <h1 class="ps-3 ms-4 fw-bolder">E-classe</h1>
            <div class="text-center mt-4">
              <h2 class="text-uppercase" style="font-size: 17px">SIGN UP</h2>
              <p class="text-secondary" style="font-size: 15px">It's quick and easy. </p>
            </div>
            <?php  if(!empty($mail_exist)){ ?>
            <div class="alert alert-danger" role="alert"><?php echo $mail_exist; ?></div>
            <?php } ?>
            <div class="mb-1">
              <label  class="form-label" style="font-size: 13px">Enter your name</label> <br>
              <input type="name" name="name" class="form-control py-1" placeholder="Enter your name" id="name" onkeyup="ValidateName()" >
              <div id="erreur"></div>
            </div>
            

            <div class="mb-4">
              <label class="form-label mt-1" style="font-size: 13px" >Enter your email</label> <br>
              
              <input type="email" placeholder="Enter Your email" class="form-control py-1" name="email" id="email" onkeyup="ValidateEmail()">
              <div id="erreurMail"></div>
                <div class="mb-2">
              <label class="form-label mt-3" style="font-size: 13px" >Enter your Password</label> <br>
              <input type="password" placeholder="Enter a password" class="form-control py-1" name="password"  id="password" onkeyup="ValidatePassword()">
              <div id="erreurPassword"></div>

              <div class="mb-2">
              <label class="form-label mt-3" style="font-size: 13px" >Confirm your Password</label> <br>
              <input type="password" placeholder="confirm your password" class="form-control py-1" name="cpassword"  id="confirmpassword" onkeyup="ValidatecPassword()"> 
              <div id="erreurcpassword"></div>
              </div>

              <input
              type="submit" class="btn btn-info btn-lg mb-3 mt-3 w-100 text-white p-2" value="SIGN UP" name="submit" id="submit">
                </div>


            <div class="d-flex  flex-column justify-content-center align-items-center">
              <p class="text-black">Vous avez d??ja un compte?</p>
              <a class="text-decoration-none text-center fs-6  text-info" href="index.php">Connectez vous</a>
            </div>
            </div>

            </form>
          </section>
      </section>
    </section>    

    <script src="assets/javascript/Signupform.js"></script>
</body>
</html>