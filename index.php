
<!DOCTYPE html>
<html lang="en">
  
    <?php 
          session_start(); 
          $title = 'SIGN IN';
          include 'head.php';   
                
    ?>
    
    <?php


                  include('connexion.php');

                  $error_mail='';
                  $error_pwd='';


                    if(isset($_POST['submit'])){
                      $email = $_POST['email'];
                      $password = $_POST['password'];

                     if(empty($email)){
                       $error_mail = 'veuillez remplir ce champ !!';
                     }
                     elseif(empty($password)){
                        $error_pwd = 'veuillez remplir ce champ !!';
                     }
                     else{
                      $sql= "SELECT * FROM comptes WHERE email ='$email' and password = '$password' ";
                      $result = mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result) ==1){

                        $row = mysqli_fetch_assoc($result);
                         
                      if($row['email'] == $email && $row['password'] == $password){
                        if(isset($_POST['chekbox'])){
                          setcookie('email',$email,time()+ 10);
                          setcookie('password',$password,time()+10);
                          header('location:Dashboard.php');
                } 
                
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];


                }
                  }  
                    }
                      }
                            
              ?>
    

    
  <!-- start body  -->
  <body class="for-bg">
    <section
      class="container-fluid d-flex justify-content-center align-items-center  min-vh-100"
    >
      <section
        class="rounded p-4 col-lg-4 col-md-6 col-sm-7 bg-white shadow px-5"
      >
        <section class="row">
          <form class="form-container" method="POST"  >
            <h1 class="ps-3 ms-4 fw-bolder">E-classe</h1>
            <div class="text-center mt-4">
              <h2 class="text-uppercase" style="font-size: 17px">Sign In   </h2>
              <p class="text-secondary" style="font-size: 15px">
                Enter your credentials to access your account
              </p>
            </div>
           
           

            <div class="mb-1">
              <label for="InputEmail1" class="form-label" style="font-size: 13px">Email</label> <br>
              <span class="text-danger"> <?php echo $error_mail ?></span>
              <input
                type="email"
                name="email"
                class="form-control py-1"
                placeholder="Enter your email"
                id="InputEmail1"
                aria-describedby="emailHelp"
                value="<?php if(isset($_COOKIE['email'])){
                  echo $_COOKIE['email'];
                }
                ?>"
                >
                
                
            </div>
            

            <div class="mb-2">
              <label for="InputPassword1" class="form-label mt-1" style="font-size: 13px" >
                Password</label> <br>
                <span class="text-danger text-center"> <?php echo $error_pwd ?></span>    
              <input
                type="password"
                type="password"
                placeholder="Enter Your Password"
                value="<?php if(isset($_COOKIE['password'])){
                  echo $_COOKIE['password'];} ?>"
                class="form-control py-1"
                id="InputPassword1"
                name="password">
                
            </div>
            
            <div class="form-check my-2">
               <input class="form-check-input " type="checkbox"  name="chekbox" checked>
               <label class="form-check-label">Remember me </label>
            </div>
            

            <input
              type="submit"
              class="btn btn-info btn-lg w-100 text-white p-2"
              value="SIGN IN"
              name="submit"
            >
            
            

            <p class="text-center pt-3 fs-6 text-muted">
              Forgot your password?
              <a class="lien" href="#">Reset Password</a>
            </p>
          </form>
        </section>
      </section>
    </section>
  </body>
</html>