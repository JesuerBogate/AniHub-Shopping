
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
    <div class="container p-0">
      <img class="logo" src="assets/img/4.2.jpg" alt="">
      <h2 class="brand">AniHub</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>

          <li class="nav-item">

            <a class="nav-link" href="contact.php">Contacts</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="account.php">Account</a>
          </li>
        


        </ul>
       
      </div>
    </div>
  </nav>
 

       <!--Register-->
       <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
           <h2 class="form-weight-bold">Register</h2>
           <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
           <form id="register-form" action="registration.php" method="post">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="register-name" name="register_name" placeholder="Name" required/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="register-email" name="register_email" placeholder="Email" required/>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" id="register-password" name="register_username" placeholder="Username" required/>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="register-password" name="register_password" placeholder="Password" required/>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" id="register-confirm-password" name="register_confirm_password" placeholder="Confirm Password" required/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" class="btn" id="register-btn" value="Register"/>
    </div>
    <div class="form-group">
        <a id="login-url" class="btn">Do you have an account? Login</a>
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