<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3><?php echo $_SESSION['userName'];?></h3>
    <ul class="nav side-menu">
      <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard </a></li>
      <li><a><i class="fa fa-edit"></i>Nafi Computer<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="dashboard.php?page=addCategory">Category</a></li>
          <li><a href="dashboard.php?page=addSlide">Image</a></li>
          <li><a href="dashboard.php?page=addProductImage">Product Image</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>