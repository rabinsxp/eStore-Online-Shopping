<?php
if(isset($_SESSION['email']))
{
?>
<a href="cart.php"> Cart
</a> |
<a href="settings.php"> Settings
</a> |
<a href="logout.php"> Logout
</a>
<?php
}else{
?>
<a href="signup.php"> Sign Up
</a> |
<a href="login.php"> Login
</a>
<?php
}
?>