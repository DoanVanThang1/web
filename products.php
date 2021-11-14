<?php 
	include 'inc/header.php';
	include 'inc/slider.php';
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3 class="h3_color">Laptop</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="row clearfix">
			  <?php
			  $laptop=$product->getproductbycatId(18);
			  while ($result = $laptop->fetch_assoc()) {
				  ?>
					
					<div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="admin/uploads/<?php echo $result['image'] ?>" alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="details.php?proid=<?php echo $result['productId'] ?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"><?php echo $result['productName'] ?></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price"><?php echo $fm->format_currency($result['price'])." "."VND" ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>          
				<?php 
				}
				
				 ?>
				
			</div>
			<div class="content_top">
    		<div class="heading">
    		<h3 class="h3_color">Điện thoại</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="row clearfix">
			  <?php
			  $laptop=$product->getproductbycatId(21);
			  while ($result = $laptop->fetch_assoc()) {
				  ?>
					
					<div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="admin/uploads/<?php echo $result['image'] ?>" alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="details.php?proid=<?php echo $result['productId'] ?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"><?php echo $result['productName'] ?></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price"><?php echo $fm->format_currency($result['price'])." "."VND" ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>          
				<?php 
				}
				
				 ?>
				
    </div>
	<div class="content_top">
    		<div class="heading">
    		<h3 class="h3_color">Phụ kiện & thiết bị ngoại vi</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="row clearfix">
			  <?php
			  $laptop=$product->getproductbycatId(20);
			  while ($result = $laptop->fetch_assoc()) {
				  ?>
					
					<div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="admin/uploads/<?php echo $result['image'] ?>" alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="details.php?proid=<?php echo $result['productId'] ?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"><?php echo $result['productName'] ?></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price"><?php echo $fm->format_currency($result['price'])." "."VND" ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>          
				<?php 
				}
				
				 ?>
				
    </div>
	<div class="content_top">
    		<div class="heading">
    		<h3 class="h3_color">Linh kiện máy tính</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="row clearfix">
			  <?php
			  $laptop=$product->getproductbycatId(19);
			  while ($result = $laptop->fetch_assoc()) {
				  ?>
					
					<div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="admin/uploads/<?php echo $result['image'] ?>" alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="details.php?proid=<?php echo $result['productId'] ?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"><?php echo $result['productName'] ?></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price"><?php echo $fm->format_currency($result['price'])." "."VND" ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>          
				<?php 
				}
				
				 ?>
				
    </div>

<?php 
	include 'inc/footer.php';
 ?>

