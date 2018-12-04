<?php
require 'system/rxp.db.php';
session_start();
if(isset($_SESSION['email'])){
header('location: /../products.php');
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Signup | eStore
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
                  <h1>Signup
                  </h1>
                  <form method="post" action="user_submit.php">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="city" placeholder="City" required="true">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Sign Up">
                    </div>
                  </form>
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
