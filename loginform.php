<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="loginform.css" type="text/css">
    <link rel="stylesheet" href="animate.css">
    
</head>
<body>
    <div class="box flip animated" >
    <h1>
        LOGIN HERE
    </h1>
    <form name="form1" method="post">
            <p>Username</p>
            <input type="text" name="t1" placeholder="Enter Username" required pattern="^[A-Za-z0-9]+">
            <p>Password</p>
            <input type="password" name="t2" placeholder="Enter Password">
            <input type="submit" name="submit1" class="button" value="login" required pattern="^[A-Za-z0-9]+">
            <a href="signup.php">Don't Have An Account?</a>
    </form>
</div>


<?php
require 'connect.php';
$result = mysqli_query($con,'select * from product');
/* WHEN USER PRESSES SUBMIT BUTTON ,THE VALUE OF SUBMIT I.E SUMBIT1 WILL INDICATES THAT USER HAS SUBMITTED SOME FORM DATA
*/

if(isset($_POST['submit1']))
{
mysqli_select_db($con,"loginregister");
$count=0; /*CHCEKING WHETHER USERNAME IS UNIQUE OR NOT*/
$res=mysqli_query($con,"select * from registration where username='$_POST[t1]' && password='$_POST[t2]'");
$count=mysqli_num_rows($res);

if($count>0)
{
  ?>
  <script type="text/javascript">
  window.location="checkout.php";
  </script>
  <?php
}//IF ENDED OF USERNAME CHCEKING
else
{
  ?>
  <script type="text/javascript">
  alert("INCORRECT USERNAME OR PASSWORD! ");
  </script>
  <?php

}  //ELSE ENDED OF USERNAME CHCEKING


}//IF ENDED OF ISSET() FUNC

?>


</body>
</html>