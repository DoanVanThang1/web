<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>


 
<?php 
	/**
	* 
	*/
	class customer
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function insert_customer($date)
		{	$username=mysqli_real_escape_string($this->db->link, $date['username']);
			$name = mysqli_real_escape_string($this->db->link, $date['name']);
			$city = mysqli_real_escape_string($this->db->link, $date['city']);
			$zipcode = mysqli_real_escape_string($this->db->link, $date['zipcode']);
			$email = mysqli_real_escape_string($this->db->link, $date['email']);
			$address = mysqli_real_escape_string($this->db->link, $date['address']);
			$country = mysqli_real_escape_string($this->db->link, $date['country']);
			$phone = mysqli_real_escape_string($this->db->link, $date['phone']);
			$password = mysqli_real_escape_string($this->db->link, md5($date['password']));

			if( $username =="" ||$name == "" || $city == "" || $zipcode == "" || $email == "" || $address == "" || $country == "" || $phone == "" || $password == ""){
				$alert = "<span class='error'>Fiedls must be not empty</span>";
				return $alert;
			}else{
				$check_username = "SELECT * FROM tbl_customer WHERE username='$username' LIMIT 1";
				$result_check = $this->db->select($check_username);
				if ($result_check) {
					$alert = "<span class='error'>Tên đăng nhập đã tồn tại </span>";
					return $alert;
				}else {
					$query = "INSERT INTO tbl_customer(username,name,city,zipcode,email,address,country,phone,password) VALUES('$username','$name','$city','$zipcode','$email','$address','$country','$phone','$password') ";
					$result = $this->db->insert($query);
					if($result){
						$alert = "<span class='success'>Đăng kí thành công</span>";
						return $alert;
					}else {
						$alert = "<span class='error'>Đăng kí không thành công</span>";
						return $alert;
					}
				}
			}
		}
		public function login_customer($date)
		{
			$username =  $date['username'];
			$password = md5($date['password']);
			if($username == '' || $password == ''){
				$alert = "<span class='error'>Tên đăng nhập và Password không để trống</span>";
				return $alert;
			}else{
				$check_login = "SELECT * FROM tbl_customer WHERE username='$username' AND password='$password' ";
				$result_check = $this->db->select($check_login);
				if ($result_check != false) {
					$value = $result_check->fetch_assoc();
					Session::set('customer_login', true);
					Session::set('customer_id', $value['id']);
					Session::set('customer_name', $value['name']);
					header('Location:order.php');
				}else {
					$alert = "<span class='error'>Tên đăng nhập hoặc Password không đúng</span>";
					return $alert;
				}
			}
		}
		public function show_customers($id)
		{
			$query = "SELECT * FROM tbl_customer WHERE id='$id' ";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_customers($data, $id)
		{
			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$zipcode = mysqli_real_escape_string($this->db->link, $data['zipcode']);
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);
			$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
			
			if($name=="" || $zipcode=="" || $email=="" || $address=="" || $phone ==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE tbl_customer SET name='$name',zipcode='$zipcode',email='$email',address='$address',phone='$phone' WHERE id ='$id'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Khách hàng Updated thành công</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Khách hàng Updated Not thành công</span>";
						return $alert;
				}
				
			}
		}

	}
 ?>