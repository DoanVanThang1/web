
<!-- Bootstrap row -->
<div class="container-fuild">

<div class="row" id="body-row">
  <!-- Seitenleiste -->
  <div class="gird_2">
  <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
    <!-- d- * verbirgt die Sidebar in kleineren Geräten. Die Einträge können im Navbar-Menü gespeichert werden -->
    <!-- Bootstrap-Listengruppe -->
    <ul class="list-group">
      <!-- Trennzeichen mit Titel -->
      <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
      <!-- / END Separator -->
      <!-- Menü mit Untermenü -->
      <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justyfy-content-start align-items-center">
          <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
          <span class="menu-collapsed">Danh mục</span>
          <span class="fas fa-angle-down ml-auto"></span>
        </div>
      </a>
      <!-- Inhalt des Untermenüs -->
      <div id="submenu1" class="collapse sidebar-submenu">
        <a href="catadd.php" class="list-group-item list-group-item-action bg-dark text-white">
          <span class="menu-collapsed">Thêm danh mục</span>
        </a>
        <a href="catlist.php" class="list-group-item list-group-item-action bg-dark text-white">
          <span class="menu-collapsed">Liệt kê danh mục</span>
        </a>
      </div>
      <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-start align-items-center">
         <span class="fas fa-user fa-fw mr-3"></span>
         <span class="menu-collapsed">Thương hiệu</span>
         <span class="fas fa-angle-down ml-auto"></span>
        </div>
       </a>
      <!-- Inhalt des Untermenüs -->
      <div id='submenu2' class="collapse sidebar-submenu">
                <a href="brandadd.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Thêm thương hiệu</span>
                </a>
                <a href="brandlist.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Danh sách thương hiệu</span>
                </a>
            </div>
            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-start align-items-center">
         <span class="fas fa-user fa-fw mr-3"></span>
         <span class="menu-collapsed">Sản phẩm </span>
         <span class="fas fa-angle-down ml-auto"></span>
        </div>
       </a>
      <!-- Inhalt des Untermenüs -->
      <div id='submenu3' class="collapse sidebar-submenu">
                <a href="productadd.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Thêm sản phẩm</span>
                </a>
                <a href="productlist.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Danh sách sản phẩm</span>
                </a>
            </div>
            <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-start align-items-center">
         <span class="fas fa-user fa-fw mr-3"></span>
         <span class="menu-collapsed">Kho hàng</span>
         <span class="fas fa-angle-down ml-auto"></span>
        </div>
       </a>
      <!-- Inhalt des Untermenüs -->
      <div id='submenu4' class="collapse sidebar-submenu">
                <a href="warehouse.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Quản lí kho hàng</span>
                </a>
            </div>
            <a href="#submenu5" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-start align-items-center">
         <span class="fas fa-user fa-fw mr-3"></span>
         <span class="menu-collapsed">Quản lí sider</span>
         <span class="fas fa-angle-down ml-auto"></span>
        </div>
       </a>
      <!-- Inhalt des Untermenüs -->
      <div id='submenu5' class="collapse sidebar-submenu">
                <a href="slideradd.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Thêm slider</span>
                </a>
                <a href="sliderlist.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Tất cả Slider</span>
                </a>
            </div>
            <a href="inbox.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Đơn hàng</span>
                </div>
            </a>
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Quản lý người dùng</span>
                </div>
            </a>
            <a href="changepassword.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="far fa-envelope fa-fw mr-3"></span>
                    <span class="menu-collapsed">Thay đổi mật khẩu</span>
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Help</span>
                </div>
            </a>
            <a href="../index.php" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Website</span>
                </div>
            </a>
    </ul><!-- List Group END-->
  </div> <!-- Seitenleiste-container END -->
  <!-- MAIN -->
</div>