<?php
require("header.php");
require 'connect.php';
$result = mysqli_query($con,'select * from product');
?>
<div class="breadcrubs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcurbs-inner text-center">
                    <h3 class="breadcrubs-title">
                        Food menu
                    </h3>
                    <ul>
                        <li>Food menu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <?php while($product = mysqli_fetch_object($result)){ ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="fooder-menu-description float_left">
                <div class="single-food-item mb-30">
                    <div class="single-food-inner">
                        <div class="single-food-item-desc">
                            <div class="single-food-item-title">
                                <h2><?php echo $product->name; ?></h2>
                                <p><a href="cart.php?id=<?php echo $product->id; ?>&action=add">Order Now</a></p>
                            </div>
                            <div class="single-food-price">
                                <p>Rs <?php echo $product->price; ?></p>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
        
    </div>
</div>


<?php
require("footer.php");
?>