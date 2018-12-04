<?php
session_start();
require 'system/rxp.db.php';
if(!isset($_SESSION['email'])){
header('location:index.php');
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Settings | eStore
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
              <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                  <h1>Change Password
                  </h1>
                  <form method="post" action="setting_script.php">
                    <div class="form-group">
                      <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Change">
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
