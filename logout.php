<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Logout | eStore
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
                  <h1>Logged Out!
                  </h1>
                  <p>You have been sucessfully logged out. If you wish you can
                    <a href="login.php">Login again.
                    </a>
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
