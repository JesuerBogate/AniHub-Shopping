<?php

session_start();

include("db.php");

if(isset($_POST["login_btn"])){

$email = $_POST["email"];
$password = md5($_POST["password"]);

$stmt = $conn->prepare  ("SELECT user_id,user_name,user_email,user_password FROM user WHERE user_email = ? AND user_password= ? limit 1 ");

$stmt->bind_param("ss", $email, $password);

if($stmt->execute()){
  $stmt->bind_result($user_id , $user_name,$user_email,$user_password);
  $stmt->store_result();

  if($stmt->num_rows()==1){
   
   $row = $stmt->fetch ();

    $_SESSION ["user_id"] = $user_id;
    $_SESSION ['user_name'] = $user_name;
    $_SESSION ['user_email'] = $user_email;
    $_SESSION ['logged_in'] = true;

    header('location:  account.php?message=logged in successfully');



  }else{
    header('location:  login.php?message=could not verify your account');
  }

  }



}else{
  //error
  header('location: login.php?error=something went wrong');

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

        

     <!--Navbar-->

   <nav class="navbar navbar-expand-lg navbar-white bg-body-tertiary py-3 fixed-top">
    <div class="container">
      <img class="logo" src="assets/img/4.2.jpg" alt="">
      <h2 class="brand">AniHub</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item">

            <a class="nav-link" href="contact.html">Contacts</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="account.html">Account</a>
          </li>
        


        </ul>
       
      </div>
    </div>
  </nav>


       <!--Login-->
       <section class="my-5 py-5">
         <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="mx-auto">
         </div>
         <div class="mx-auto container">
            <form id="login-form" method="POST" action="login.php">
              <p style="color:red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error'];}?></p>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control " id="login-email" name="email" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group"> 
                    <input type="submit" class="btn" id="login-btn" name="login_btn" value="Login"/>
                </div>
                <div class="form-group">
                    <a id="register-url" href="register.php" class="btn">Dont have an account? Register</a>
                </div>
            </form>
         </div>
       </section>




    <!--footer-->
       <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="assets/img/4.2.jpg">
            <h2 class="brand">AniHub</h2>
            <p class="pt-3">BEST QUALITY FOR MOST AFFORDABLE PRICE</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5  class="pb-2">Featured:</h5>
            <ul class="text-uppercase">
                <li><a href="shop.php">figurines</a></li>
              <li><a href="shop.php">apparels</a></li>
              <li><a href="shop.php">accessories</a></li>
              <li><a href="shop.php">new</a></li>
            </ul>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us:</h5>
            <div>
              <h6 class="text-uppercase">email address</h6>
              <p>Anihub@gmail.com</p>
            </div>
            <div>
              <h6 class="text-uppercase">contact number</h6>
              <p>+63 912 3456 789</p>
            </div>
            <div>
              <h6 class="text-uppercase">facebook</h6>
              <p>AniHub-BUP</p>
            </div>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">EME:</h5>
            <div class="row">
              <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
              <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
              <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
              <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
              <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
            </div>
          </div>
      
        </div>
      </footer>  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
    <html>