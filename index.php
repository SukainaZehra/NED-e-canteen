<?php
  require("header.php");
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<style>
body {
    margin: 0;
    font-size: 20px;
    text-align: center;
}

.container {
    position: top;
    max-width: 1500px;
    margin: auto;
}

.container img {vertical-align: top;}

.container .content {
    position: absolute;
    top: 0;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    padding: 10px;
}

.column {
  float: left;
  width: 50%;
  padding: 20px;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 30px;
  }
}


.card {
  box-shadow: 0 20px 20px 0 rgba(1, 1, , 4);
  padding: 40px;
  text-align: center;
  background-color: #f1f1f1f1f1;
 background: rgba(0, 0, 0, 0.8); 
}
.image
{
	width:120px;
	padding:10px;
	margin-left:auto;
	margin-right:auto;
	display:block;
    float:center;
    height:120px;
	margin-top:20px;
	color:white;

}

.btn {
  background-color: #dddddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btn:hover {
  background-color: #e54c2a;
  color: white;
}
.btn:hover a {color: white;}

</style>
</head>
<body>

<div class="breadcrubs">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
 
          <div class="breadcurbs-inner text-center">
            <h3 class="breadcrubs-title">
              Welcome
            </h3>
            <ul>
              <li>TO NED E-CANTEEN</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="column">
        <div class="card">
    <img src="menu.png"><br>
    <button class="btn"><a href="menu.php">MENU</a></button>
        </div>
    </div>

    <div class="column">
        <div class="card">
    <img src="contact.png"><br>
        <button class="btn"><a href="contact.php">CONTACT US</a></button>
        </div>
    </div>
    
    <div class="column">
        <div class="card">
    <img src="feedback.png"><br>
    <button class="btn"><a href="feedbackform.php">FEEDBACK</a></button>
        </div>
    </div>
    
    <div class="column">
        <div class="card">
    <img src="about.png"><br>
        <button class="btn"><a href="about.php">ABOUT</a></button>
        
        </div>
    </div>
    </div>
</div>
</body>
</html>
<?php
require("footer.php");
?>