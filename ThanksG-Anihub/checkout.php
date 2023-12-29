<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" href="styles.css">
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

  <!--Checkout-->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-3">
        <h2 class="form-weight-bold">Check Out</h2>
        <hr class="mx-auto"> 
    </div>
    <div class="mx-auto container">
        <form id="checkout-form">
            <div class="form-group checkout-small-element">
                <label>Name</label>
                <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>Email</label>
                <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>Phone</label>
                <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required/>         
            </div>
            <div class="form-group checkout-small-element">
                <label>City</label>
                <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required/>
            </div>
            <div class="form-group checkout-large-element">
                <label>Address</label>
                <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required/>
            </div>
            <div class="form-group checkout-btn-container">
                <input type="submit" class="btn" id="checkout-btn" value="Checkout"/>
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
  </html>