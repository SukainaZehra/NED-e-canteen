<!--
include('dbConfig.php');-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css" type="text/css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>

<?php
require 'connect.php';
$result = mysqli_query($con,'select * from product');
/* WHEN USER PRESSES SUBMIT BUTTON ,THE VALUE OF SUBMIT I.E SUMBIT1 WILL INDICATES THAT USER HAS SUBMITTED SOME FORM DATA
*/

if(isset($_POST['submit1']))
{
$count=0; /*CHCEKING WHETHER USERNAME IS UNIQUE OR NOT*/
$res=mysqli_query($con,"select * from registration where username='$_POST[t7]'");
$count=mysqli_num_rows($res);


if($count>0)
{
  ?>
  <script type="text/javascript">
  alert("USERNAME ALREADY TAKEN
  PLEASE FILL OUT THE FORM AGAIN");
  </script>
  <?php
}//IF ENDED OF USERNAME CHCEKING
else
{

 $sql = "INSERT INTO registration VALUES ('"."','".$_POST["t1"]."','".$_POST["t2"]."','".$_POST["t3"]."','".$_POST["t4"]."','".$_POST["t5"]."','".$_POST["t7"]."','".$_POST["t8"]."')"; 
$result = mysqli_query($con,$sql);
?>
  <script type="text/javascript">
  alert("RECORD INSERTED SUCCESSFULLY! ");
  window.location="checkout.php";
  </script>
  <?php

}  //ELSE ENDED OF USERNAME CHCEKING


}//IF ENDED OF ISSET() FUNC

?>
    <div class="box flip animated">
    <h1>
       SIGNUP HERE
    </h1>
    <form name="form1" method="post">
            <p>First Name</p>
            <input type="text" name="t1" placeholder="Enter First Name" required pattern="^[A-Za-z]+">
             <p>Last Name</p>
            <input type="text" name="t2" placeholder="Enter Last Name" required pattern="^[A-Za-z]+">
             <p>Email</p>
            <input type="text" name="t3" placeholder="Enter Your E-mail" required>
             <p>CNIC No</p>
             <input type="text" name="t4" placeholder="Enter In Format(xxxxxxxxxxxxx)" required maxlength="13 pattern="\d{10}">
              <p>Contact No</p>
            <input type="text" name="t5" placeholder="Enter In Format(xxxxxxxxxxx)" required maxlength="11 pattern="\d{10}">
             <!--<p>Canteen Name</p>
            <input type="text" name="t6" placeholder="Choose Canteen Name" required pattern="^[A-Za-z]+">-->
             <p>Username</p>
            <input type="text" name="t7" placeholder="Enter Username" required pattern="^[A-Za-z0-9]+"> 
            <p>Password</p>
            <input type="password" name="t8" placeholder="Enter New Password" required pattern="^[A-Za-z0-9]+">
            <!--<p>Repeat Password</p>
            <input type="password" name="t1" placeholder="Enter Password Again">-->
            <input type="submit" name="submit1" value="Signup">
            <!--
            <input type="submit" name="submit1" formaction="loginform.php" value="Already Have Account?" >-->
            <a href="loginform.php">Already Have Account?</a>
    </form>

</div>

<!--
if(isset($_POST["submit1"]))
{
    $link=mysqli_connect("localhost","root","Sukaina97");
    mysqli_select_db($link,"loginregister");
    $res=mysqli_query($link,"INSERT INTO registration values{'','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]'}");
}
?>-->
</body>
</html>