<?php 
	include 'inc/header.php';
?>
<?php
if (isset ($_REQUEST ['search'])) {
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
	$str = addslashes($_GET['fsearch']);
        }
?>
<style>
	.images_1_of_4 .button a {
		padding: 10px;
  
    background: #602D8D;
    color: #fff;
	}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<div class="main">

    <div class="content">
	<div class="row clearfix"> 
	      	<?php 
	      	if($str=='')
	      	{
	      		echo '<span style="color:red; font-size:18px;">Hãy nhập vào ô tìm kiếm</span>';
	      	}

	       else
	      	$search = $product-> search_product($str);
	      	if ($search){
	      		while ($result = $search->fetch_assoc()) {
	      			?>
				<div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="admin/uploads/<?php echo $result['image'] ?>" alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="details.php?proid=<?php echo $result['productId'] ?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a name="" href="" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                            
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
		}
		else echo '<span style="color:red; font-size:18px;">Không tìm thấy sản phẩm</span>';
				?>

			
</div>
    	</div>
			
    </div>
 </div>
<?php
	include 'inc/footer.php'; 
?>