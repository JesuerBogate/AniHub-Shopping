
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" href="styles.css">

    <style>
        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }
    </style>

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


  <!--home-->
  <section  id="home"> 
    <div class="container">
        <h5>QUALITY PRODUCTS</h5>
        <h1><span>Best prices</span> you can get!!! </h1>
        <p>Collect yours now</p>
        <a href="register.php"><button class="buy-btn">Shop now</button></a>
        

    </div>
  </section>

  <!--brand-->
  <section id="brand" class="container">
    <div class="row">
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/img/logo-1.jpg"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/img/logo-2.jpg"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/img/logo-3.jpg"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/img/logo-4.jpg"/>

    </div>
  </section>

  <!--new-->

  <section id="new" class="w-100"> 
    <div class="row p-0 m-0">
      <!--one-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/img/464bc15ebe094285f36607fd94cf0b87.jpg">
        <div class="details">
          <h2>High Quality Figurines</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>
      <!--two-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/img/6beb15bcb90d976f64dddb6248b66a68.jpg">
        <div class="details">
          <h2>Awesome T-shirts</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

      <!--Three-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/img/Demon Slayer_ Kimetsu No Yaiba Tanjiro Hanafuda Earrings.jpg">
        <div class="details">
          <h2>Amazing Accessories</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
    </div>
    </div>
  </section>

  <!--featured-->
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>Products</h3>
    </div>

    <div class="row mx-auto container-fluid">
        <?php while ($row = $products->fetch_assoc()) { ?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="images/<?php echo $row['image']; ?>">
                <p class="item_name"><?php echo $row['product_name']; ?></p>
                <p class="item_details"><?php echo $row['product_description']; ?></p>
                <p class="item_price">PHP<?php echo $row['product_price']; ?></p>

                <!-- Add this form inside each item-preview div -->
                <form method="post" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                    <input type="hidden" name="item_name" value="<?php echo $row['product_name']; ?>">
                    <input type="hidden" name="item_price" value="<?php echo $row['product_price']; ?>">
                    <input type="hidden" name="item_image" value="<?php echo $row['image']; ?>">
                    <button type="submit" class="add-to-cart-btn">Add to cart</button>
                </form>
            </div>
        <?php } ?>
    </div>
</section>

  <!--banner-->
  <section id="banner">
    <div class="container">
      <h1>CHRISTMAS SALE </h1>
      <h2>Save up to 40% of your chosen product!!!</h2>
      <button>Shop now</button>
    </div>
  </section>


  <!--Figurines-->

  <section id="featured" class="my-5"> 
    <div class="container text-center mt-5 py-5">
     <h3>Figurines</h3>
     <hr>
     <p>Explore and check out our Figurines</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/one-piece-2484806_1280.jpg">
        
        <h5 class="p-name">Jujutsu kaisen Figurines</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/one-piece-2484805_1280.jpg">
        
        <h5 class="p-name">Monkey D' Luffy Figurine</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/171c8799227cd90540c6b26f1951f7df.jpg">
        
        <h5 class="p-name">Maki Zenen Figurine</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/6799379ae8a0d3f311b33b54102bd8da.jpg">
        
        <h5 class="p-name">Yuji Itadori Figurine</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>

  <!--Apparels-->

  <section id="featured" class="my-5"> 
    <div class="container text-center mt-5 py-5">
     <h3>Apparels</h3>
     <hr>
     <p>Explore and check out our Figurines</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/tshirt1.jpg">
        
        <h5 class="p-name">T-shirt design 1</h5>
        <h4 class="p-price">Php 300.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/tshirt2.jpg">
        
        <h5 class="p-name">T-shirt design 2</h5>
        <h4 class="p-price">Php 300.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/tshirt3.jpg">
        
        <h5 class="p-name">T-shirt design 3</h5>
        <h4 class="p-price">Php 300.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/tshirrt4.jpg">
        
        <h5 class="p-name">T-shirt design 4</h5>
        <h4 class="p-price">Php 300.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>

<!--accessories-->

<section id="featured" class="my-5"> 
  <div class="container text-center mt-5 py-5">
   <h3>Accessories</h3>
   <hr>
   <p>Explore and check out our Figurines</p>
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/img/access1.jpg">
      
      <h5 class="p-name">Accessories 1</h5>
      <h4 class="p-price">Php 100.00</h4>
      <button class="buy-btn">Buy Now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/img/access2.jpg">
      
      <h5 class="p-name">Accessories  2</h5>
      <h4 class="p-price">Php 100.00</h4>
      <button class="buy-btn">Buy Now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/img/access3.jpg">
      
      <h5 class="p-name">Accessories 3</h5>
      <h4 class="p-price">Php 100.00</h4>
      <button class="buy-btn">Buy Now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/img/access4.jpg">
      
      <h5 class="p-name">Accessories 4</h5>
      <h4 class="p-price">Php 100.00</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
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