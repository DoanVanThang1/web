<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
 <?php 
	$login_check = Session::get('customer_login');
	if ($login_check) {
		header('Location:order.php'); 
	}
?>

<?php
    // gọi class category
     
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertCustomer = $cs -> insert_customer($_POST); // hàm check catName khi submit lên
    }
 ?>
 <?php 
 	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $login_Customer = $cs -> login_customer($_POST); // hàm check catName khi submit lên
    }
 ?>
 <link rel="stylesheet" href="css/login.css">
 <div class="main">
 <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Đăng nhập</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<?php 
    		if (isset($login_Customer)) {
    			echo $login_Customer;
    		}
    		 ?>
			<div class="card-body">
				<form action="" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password"  name="password" class="form-control" placeholder="Password" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Đăng nhập" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Nếu không có tài khoản?<a href="signup.php">Đăng kí</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="admin">Đăng nhập với Admin</a>
				</div> -->
			</div>
		</div>
	</div>
</div>
    	
<?php 
	include 'inc/footer.php';
 ?>
