<?php
require("header.php");

session_start();
require 'connect.php';
require 'item.php';

//save new order
mysqli_query($con,'insert into orders(name, datecreation, status, username) 
values("New Order", "'.date('Y-m-d').'", 0, "acc2")');
$ordersid = mysqli_insert_id($con);

//save details for new order 
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart); $i++){
	mysqli_query($con,'insert into ordersdetail(productid, ordersid, price, quantity) 
values('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')');
}
//clear all products un cart
unset($_SESSION['cart']);

?>
<div class="breadcrubs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcurbs-inner text-center">
                    <h3 class="breadcrubs-title">
                        Thankyou for shopping
                    </h3>
                    <ul>
                        <li style="color: #000000;">click <a href="menu.php">here</a> to continue shopping or go to <a href="index.php">home page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
