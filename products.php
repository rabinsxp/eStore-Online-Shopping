<?php
session_start();
require 'system/if_on_cart.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Products | eStore
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
        <div class="content">
          <div class="content_box">
            <div class="men">
              <h1 id="cameras">CAMERAS
              </h1>
              <div class="span_2">
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/5.jpg" alt="Cannon" class="img-responsive"/>
                  <h3>Cannon EOS
                  </h3>
                  <p>Price: ₹ 36000.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(1)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/sony_dslr.jpeg" alt="Sony DSLR" class="img-responsive"/>
                  <h3>Sony DSLR
                  </h3>
                  <p>Price: ₹ 50000.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(2)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/olympus.jpg" alt="Olympus" class="img-responsive"/>
                  <h3>Olympus DSLR
                  </h3>
                  <p>Price: ₹ 80000
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(3)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=3" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="clearfix">
                </div>
              </div>
              <h1 id="clothes">CLOTHES
              </h1>
              <div class="span_2">
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/23.jpg" alt="Favre Leuba" class="img-responsive"/>
                  <h3>Luis Phil
                  </h3>
                  <p>Price: ₹ 1000.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(4)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/raymond.jpg" alt="Raymond shirt" class="img-responsive"/>
                  <h3>Raymond
                  </h3>
                  <p>Price: ₹ 1500.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(5)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/charles.jpg" alt="Charles shirt" class="img-responsive"/>
                  <h3>Charles
                  </h3>
                  <p>Price: ₹ 1000.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(6)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="clearfix">
                </div>
              </div>
              <h1 id="watches">WATCHES
              </h1>
              <div class="span_3">
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/titan201.jpg" alt="Titan 201" class="img-responsive"/>
                  <h3>Titan Model #101
                  </h3>
                  <p>Price: ₹ 3000.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(7)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/hmt.jpg" alt="htm milan" class="img-responsive"/>
                  <h3>HMT Milan
                  </h3>
                  <p>Price: ₹ 8000.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(8)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="col_1_of_single1 span_1_of_single1">
                  <img src="img/21.jpg" alt="Faber Luba" class="img-responsive"/>
                  <h3>Faber Luba
                  </h3>
                  <p>Price: ₹ 1700.00
                  </p>
                  <?php if(!isset($_SESSION['email'])){  ?>
                  <p>
                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now
                    </a>
                  </p>
                  <?php
}
else{
if(if_on_cart(9)){
echo '<a href="cart.php" class=btn btn-block btn-success disabled>Added to cart</a>';
}else{
?>
                  <a href="system/cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart
                  </a>
                  <?php
}
}
?>
                </div>
                <div class="clearfix">
                </div>
              </div>
              <div class="clearfix">
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
