<?php
session_start();
require 'system/rxp.db.php';
if(!isset($_SESSION['email'])){
header('location: login.php');
}
$user_id=$_SESSION['id'];
$user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
$user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
$no_of_user_products= mysqli_num_rows($user_products_result);
$sum=0;
if($no_of_user_products==0){
?>
<script>
  window.alert("Your Cart is Empty!");
</script>
<?php
}else{
while($row=mysqli_fetch_array($user_products_result)){
$sum=$sum+$row['price'];
}
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Cart | eStore
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
            <table class="table table-bordered table-striped ">
              <tbody>
                <tr>
                  <th>Item Number
                  </th>
                  <th>Item Name
                  </th>
                  <th>Price
                  </th>
                  <th>
                  </th>
                </tr>
                <?php
$user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
$no_of_user_products= mysqli_num_rows($user_products_result);
$counter=1;
while($row=mysqli_fetch_array($user_products_result)){
?>
                <tr>
                  <th>
                    <?php echo $counter ?>
                  </th>
                  <th>
                    <?php echo $row['name']?>
                  </th>
                  <th>₹
                    <?php echo $row['price']?>
                  </th>
                  <th>
                    <a href='system/cart_remove.php?id=<?php echo $row['id'] ?>'>Remove
                    </a>
                  </th>
                </tr>
                <?php $counter=$counter+1;}?>
                <tr>
                  <th>
                  </th>
                  <th>Total
                  </th>
                  <th>₹
                    <?php echo $sum;?>/-
                  </th>
                  <th>
                    <a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order
                    </a>
                  </th>
                </tr>
              </tbody>
            </table>
          </div>
          <?php include 'system/footers.php'; ?>
        </div>
      </div>
      <?php include 'system/footer_scripts.php'; ?>
      </body>
    </html>