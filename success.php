-
<?php
session_start();
require 'system/rxp.db.php';
if(!isset($_SESSION['email'])){
header('location:index.php');
}else{
$user_id=$_GET['id'];
$confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
$confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Confirmation | eStore
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
              <div class="register">
                <div class="register-top-grid">
                  <h1>Confirmation!
                  </h1>
                  <p>Your order is confirmed. Thank you for shopping with us.
                    <a href="products.php">Click here
                    </a> to purchase any other item.
                  </p>
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
