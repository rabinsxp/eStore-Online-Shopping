<?php
session_start();
require 'system/if_on_cart.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>E-Store Home
    </title>
    <?php include 'system/meta_scripts.php'; ?>
  </head>
  <body>
    <div class="wrap">
      <div class="container">
        <?php include 'system/header_top_menu.php'; ?>
        <div class="col-sm-3 header-top-right">
          <?php include 'system/nav_menu.php'; ?>
          <div class="clearfix">
          </div>
        </div>
        <?php include 'system/header_boot_menu.php'; ?>
        <div class="grid_1">
          <div class="col-md-3 banner_left">
            <img src="design/images/pic1.png" class="img-responsive" alt=""/>
            <div class="banner_desc">
              <h1>Nivea Soft Light
              </h1>
              <h2>Moisturising Cream, 300ml
              </h2>
              <h5>₹ 197.00
                <small>Only
                </small>
              </h5>
              <?php if(!isset($_SESSION['email'])){  ?>
              <p>
                <a href="login.php" role="button" class="btn1 btn4 btn-1 btn1-1b">Buy Now
                </a>
              </p>
              <?php
}
else{
if(if_on_cart(10)){
echo '<a href="cart.php" class=btn1 btn4 btn-1 btn1-1b disabled>Added to cart</a>';
}else{
?>
              <a href="system/cart_add.php?id=10" class="btn1 btn4 btn-1 btn1-1b " name="add" value="add" class="btn1 btn4 btn-1 btn1-1b">Add to cart
              </a>
              <?php
}
}
?>
            </div>
          </div>
          <div class="col-md-9 banner_right">
            <section class="slider">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="design/images/banner001.jpg" alt=""/>
                  </li>
                  <li>
                    <img src="design/images/banner002.jpg" alt=""/>
                  </li>
                </ul>
              </div>
            </section>
          </div>
          <div class="clearfix">
          </div>
        </div>
        <div class="content">
          <div class="content_box">
            <ul class="grid_2">
              <a href="products.php">
                <li>
                  <img src="design/images/pic2.png" class="img-responsive" alt=""/>
                  <span class="btn5">₹ 32000
                  </span>
                  <p>Cannon EOS - Camera
                  </p>
                </li>
              </a>
              <a href="products.php">
                <li>
                  <img src="design/images/pic3.png" class="img-responsive" alt=""/>
                  <span class="btn5">₹ 7500
                  </span>
                  <p>HMT Milan - Watches
                  </p>
                </li>
              </a>
              <a href="products.php">
                <li>
                  <img src="design/images/pic6.png" class="img-responsive" alt=""/>
                  <span class="btn5">₹ 1200
                  </span>
                  <p>Jhalsani - Shirt
                  </p>
                </li>
              </a>
              <a href="products.php">
                <li>
                  <img src="design/images/pic5.png" class="img-responsive" alt=""/>
                  <span class="btn5">₹ 45000
                  </span>
                  <p>Nikon EOS - Cameras
                  </p>
                </li>
              </a>
              <a href="products.php">
                <li class="last1">
                  <img src="design/images/pic4.png" class="img-responsive" alt=""/>
                  <span class="btn5">₹ 1200
                  </span>
                  <p>Pure Cotton - Tshirt
                  </p>
                </li>
              </a>
              <div class="clearfix">
              </div>
            </ul>
            <div class="grid_3">
              <div class="col-md-6 box_2">
                <div class="section_group">
                  <div class="col_1_of_2 span_1_of_2">
                    <img src="design/images/ghadi.png" class="img-responsive" alt=""/>
                  </div>
                  <div class="col_1_of_2 span_1_of_2">
                    <img src="design/images/camera.png" class="img-responsive" alt=""/>
                  </div>
                  <div class="clearfix">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box_3">
                  <div class="col_1_of_2 span_1_of_2 span_3">
                    <h3>FINIVO FASHION Men's Cotton Casual Shirt
                    </h3>
                    <h4>₹ 737
                    </h4>
                    <p>Offer Available till 24 Dec 2019.
                    </p>
                    <a href="#" class="btn1 btn6 btn-1 btn1-1b">Add To Cart
                    </a>
                  </div>
                  <div class="col_1_of_2 span_1_of_2 span_4">
                    <div class="span_5">
                      <img src="design/images/pic9.png" class="img-responsive" alt=""/>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
            <?php include 'system/footers.php'; ?>
          </div>
        </div>
        <?php include 'system/footer_scripts.php'; ?>
        </body>
      </html>
