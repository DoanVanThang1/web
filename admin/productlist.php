<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/cart.php';  ?>
<?php include '../classes/brand.php';  ?> 
<?php include '../classes/product.php';  ?>
<?php require_once '../helpers/format.php'; ?>
<?php 
	$pd = new product();
	$fm = new Format();
	if(!isset($_GET['productid']) || $_GET['productid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['productid']; // Lấy catid trên host
        $delProduct = $pd -> del_product($id); // hàm check delete Name khi submit lên
    }

 ?>
 
   <?php 
        // PHẦN XỬ LÝ PHP
	
		$result=$pd->count_product();
		$row = $result->fetch_assoc();
		$total_records = $row['total'];
		// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit=5;
// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
		$total_page = ceil($total_records / $limit);
		if ($current_page > $total_page){
			$current_page = $total_page;
		}
		else if ($current_page < 1){
			$current_page = 1;
		}
		 
		// Tìm Start
		$start = ($current_page - 1) * $limit;
		?>
		
        <div>
        <h2>Tất cả sản phẩm</h2>
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Code</th>
					<th>Tên sản phẩm</th>
					<th>Nhập hàng</th>
					<th>Số lượng nhập</th>
					<th>Đã bán</th>
					<th>Tồn</th>
					<th>Giá</th>
					<th>Image</th>
					<th>Danh mục</th>
					<th>Thương hiệu</th>
					
					<th>Loại</th>
					<th>Xử lý</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				
				$pdlist = $pd->show_product($start);
				$i = 0;
				
				
					if($pdlist){
					
							while ($result = $pdlist->fetch_assoc()){
								$i++;
									
									
				 ?>
				<tr class="odd gradeX">
					<td><?php echo $i ?></td>
					<td><?php echo $result['product_code'] ?></td>
					<td><?php echo $result['productName'] ?></td>
					<td><a href="productmorequantity.php?productid=<?php echo $result['productId'] ?>">Nhập hàng</a></td>
					<td>
						<?php echo $result['productQuantity'] ?>

					</td>
					<td>
						<?php echo $result['product_soldout'] ?>

					</td>
					<td>
						<?php echo $result['product_remain'] ?>

					</td>
					<td><?php echo $result['price'] ?></td>
					<td><img src="uploads/<?php echo $result['image'] ?>" width="80"></td>
					<td><?php echo $result['catName'] ?></td>
					<td><?php echo $result['brandName'] ?></td>
					
					<td><?php 
						if($result['type']==0){
							echo 'Nổi bật';
						}else{
							echo 'Không Nổi Bật';
						}

					?></td>
					
					<td><a href="productedit.php?productid=<?php echo $result['productId'] ?>">Edit</a> || <a href="?productid=<?php echo $result['productId'] ?>">Delete</a></td>
				</tr>
				<?php
							
						
					}
				}
				?>
			</tbody>
		</table>

      
        <nav aria-label="Page navigation example">
		<ul class="pagination" style="margin-top: 1rem; justify-content:flex-end;">
		
           <?php
		   // PHẦN HIỂN THỊ PHÂN TRANG
// BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1){
    echo '<a  class="page-link" href="productlist.php?page='.($current_page-1).'">Prev</a> ';
}
 
// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++){
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page){
        echo '<a class="page-link">'.$i.'</a>';
    }
    else{
        echo '<a class="page-link"  href="productlist.php?page='.$i.'">'.$i.'</a>';
    }
}
 
// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
if ($current_page < $total_page && $total_page > 1){
    echo '<a class="page-link"  href="productlist.php?page='.($current_page+1).'">Next</a>';
} 
            
           ?>
		   </ul>
		   </nav>
		   
</div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
<?php
include 'inc/footer.php'
?>
