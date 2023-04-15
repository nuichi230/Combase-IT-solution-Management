<?php

// Including the database connection file
@include 'config.php';

// Starting the session
session_start();

// Handling user login
if(isset($_POST['login_submit'])){

   // Sanitizing user inputs
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);

   // Query to fetch user from database
   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$password'";
   $result = mysqli_query($conn, $select);

   // If user exists
   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      // If user is an admin
      if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');
      }
      // If user is a normal user
      elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');
      }
     
   }else{
      $login_error[] = 'incorrect email or password!';
   }

}

// Handling user registration
if(isset($_POST['register_submit'])){

   // Sanitizing user inputs
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   // Query to check if user already exists
   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$password'";
   $result = mysqli_query($conn, $select);

   // If user already exists
   if(mysqli_num_rows($result) > 0){
      $register_error[] = 'user already exists!';
   }else{
      // If passwords match, insert the new user into the database
      if($password != $cpassword){
         $register_error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$password','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Combase IT Management</title>

    <!---------------style--------------->
    <link rel="stylesheet" href="loginstyle.css" />


  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">

<!---------------------SIGN IN  FORM ----------------->
       
           <?php

              include 'login02.php';

            ?>


<!---------------------REGISTER FORM----------------->

            <?php

              include 'login01.php';

            ?>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/image1.png" class="image img-1 show" alt="" />
              <img src="./img/image2.png" class="image img-2" alt="" />
              <img src="./img/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>COMBASE AT YOUR SERVICE</h2>
                  <h2>Savvy as usual</h2>
                  <h2>Technicians for all</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
