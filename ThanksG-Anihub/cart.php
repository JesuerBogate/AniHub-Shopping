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



  <!--Cart-->
  <section class="cart container my-5">
    <div class="container my-5">
        <h2 class="font-weight-bold">Your Cart</h2>
        <hr>
    </div>
    
    <table class="mt-5 pt-5">
        <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <img src=""/>
                <div>
                    <p>Product name</p>
                    <small><span>$</span>155</small>
                    <br>
                    <a class="remove-btn" href="#">Remove</a>
                </div>
            </div>
        </td>
        <td>
            <input type="number" value="1"/>
            <a class="edit-btn" href="#">Edit</a> 
        </td>
        
        <td>
            <span>$</span>
            
            <span class="product-price">155</span>
        </td>
    </tr>
        
        <tr>
        <td>
            <div class="product-info">
                <img src=""/>
                <div>
                    <p>Product name</p>
                    <small><span>$</span>155</small>
                    <br>
                    <a class="remove-btn" href="#">Remove</a>
                </div>
            </div>
        </td>
        <td>
            <input type="number" value="1"/>
            <a class="edit-btn" href="#">Edit</a> 
        </td>
        
        <td>
            <span>$</span>
            
            <span class="product-price">155</span>
        </td>
    </tr>
    </table>
    
    <div class="cart-total">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$155</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$155</td>
            </tr>
        </table>
    </div>
    
    
    <div class="checkout-container">
        <button class="btn checkout-btn">Checkout</button>
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