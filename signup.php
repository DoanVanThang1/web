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
 d
 <link rel="stylesheet" href="css/signup.scss">
 
 <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img4.jpg"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
            <form action="" method="POST">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Đăng kí</h3>
                <?php 
    		if (isset($insertCustomer)) {
    			echo $insertCustomer;
    		}
    		 ?>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" name="username" class="form-control form-control-lg" />
                      <label class="form-label"  for="form3Example1n">Username</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" name="name" class="form-control form-control-lg" />
                      
                      <label class="form-label" for="form3Example1m">Nhập Họ và tên</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" id="form3Example1m1" name="password" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Password</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" id="form3Example1n1" name="repassword" class="form-control form-control-lg" />
                      <label class="form-label"  for="form3Example1n1">Nhập lại Password</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" />
                  <label class="form-label"  for="form3Example8">Địa chỉ</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="femaleGender"
                      value="option1"
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="maleGender"
                      value="option2"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="otherGender"
                      value="option3"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select">
                      <option value="1">Huyện</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select" name="country"  onchange="change_country(this.value)">
                     
                      <option value="TPHCM">TPHCM</option>
                      <option value="Hà Nội">Hà Nội</option>
                      <option value="Đà Nẵng">Đà Nẵng</option>
                      <option value="Cần Thơ">Cần Thơ</option>         
                      <option value="Bình Định">Bình Định</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example9" name="phone" class="form-control form-control-lg" />
                  <label class="form-label"  for="form3Example9">Số Điện thoại</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" name="zipcode" class="form-control form-control-lg" />
                  <label class="form-label" name="zipcode" for="form3Example90">Zipcode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" name="city" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Tên công ty</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" />
                  <label class="form-label"  for="form3Example97">Email</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                <input type="reset" class="btn btn-light btn-lg" value="Xóa tất cả">
               <input type="submit" class="btn btn-warning btn-lg ms-2" name="submit" value="Tạo tài khoản">
                </div>

              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    	
       <div class="clear"></div>
  
