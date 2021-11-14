</div>
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Thông tin</h4>
						<ul>
						<li><a href="#">Về chúng tôi</a></li>
						<li><a href="#">Dịch vụ</a></li>
						<li><a href="#"><span>Tìm dịch vụ</span></a></li>
						
						<li><a href="contact.php"><span>Liên hệ</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tại sao bạn chọn chúng tôi</h4>
						<ul>
						<li><a href="about.html">Về chúng tôi</a></li>
						<li><a href="faq.html">Dịch vụ</a></li>
						<li><a href="#">Tìm dịch vụ</a></li>
						<li><a href="contact.html"><span>Chính sách</span></a></li>
						
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Giỏ hàng của tôi</h4>
						<ul>
							<li><a href="login.php">Đăng nhập</a></li>
							<li><a href="cart.php">Xem giỏ hàng</a></li>
							<li><a href="wishlist">Sản phẩm yêu thích</a></li>
							<!-- <li><a href="#">Track My Order</a></li> -->
							<li><a href="hepl.php">Giúp đỡ</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Liên hệ</h4>
						<ul>
							<li><span>Đoàn Văn Thắng</span></li>
							<li><span>Phan Minh Nhật</span></li>
							<li><span>Huỳnh Thanh Hưng</span></li>
						

						</ul>
						<div class="social-icons">
							<h4>Theo dõi chúng tôi</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="contact.php" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>coppy right @2021</p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>
